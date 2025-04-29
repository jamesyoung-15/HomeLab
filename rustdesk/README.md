# Setup

I am using RustDesk to remotely control backup phones at home. For the RustDesk server, I am hosting the server on Oracle VPS as it is free.

See RustDesk setup [guide](https://rustdesk.com/docs/en/self-host/rustdesk-server-oss/docker/). For Oracle VPS make sure to open port security 

## General Setup

1. Allow the TCP ports 21115-21119 and UDP port 21116

Typically for cloud platforms need to modify some security group settings. See below for Oracle Cloud example (free tier).

2. Setup Docker

Install Docker and Docker Compose. Then can add RustDesk server compose file, eg:

``` yml
services:
  hbbs:
    container_name: hbbs
    image: rustdesk/rustdesk-server:latest
    command: hbbs
    volumes:
      - ./data:/root
    network_mode: "host"

    depends_on:
      - hbbr
    restart: unless-stopped

  hbbr:
    container_name: hbbr
    image: rustdesk/rustdesk-server:latest
    command: hbbr
    volumes:
      - ./data:/root
    network_mode: "host"
    restart: unless-stopped

```

3. Connect with RustDesk Client

On the directory where compose file is in, get the public key which is located in data, eg. `cat data/id_ed25519.pub`. If using VPS note WAN IP to use for ID/Relay server IP.

Then in RustDesk client open settings and in ID/Relay settings enter VPS WAN IP for both ID and relay server and public key from above in key field.

## Oracle VPS

For RustDesk server, we need to allow the TCP ports 21115-21119 and UDP port 21116.

On Oracle Cloud we have to open these ports on both the security list of the Virtual Cloud Network (VCN) the instance is in and also open these ports on the instance's firewall.

### VCN Security List

- Rule 1: Allow TCP Traffic for RustDesk
  - Source: 0.0.0.0/0
  - Protocol: TCP
  - Destination Port Range: 21115-21119

- Rule 2: Allow TCP Traffic for RustDesk
  - Source: 0.0.0.0/0
  - Protocol: UDP
  - Destination Port Range: 21116

### VM Firewall

#### Red Hat Distros

``` bash
sudo firewall-cmd --add-port=21115/tcp --permanent
sudo firewall-cmd --add-port=21116/tcp --permanent
sudo firewall-cmd --add-port=21117/tcp --permanent
sudo firewall-cmd --add-port=21118/tcp --permanent
sudo firewall-cmd --add-port=21119/tcp --permanent
sudo firewall-cmd --add-port=21116/udp --permanent
sudo firewall-cmd --reload
```

#### Ubuntu-based Distros

Most naive guides suggest UFW, but Oracle Cloud doesn't rely on UFW and instead recommends directly editing `iptables`. Below is example:

``` bash
sudo iptables -I INPUT 6 -m state --state NEW -p tcp --dport 21115 -j ACCEPT

sudo iptables -I INPUT 6 -m state --state NEW -p tcp --dport 21116 -j ACCEPT

sudo iptables -I INPUT 6 -m state --state NEW -p tcp --dport 21117 -j ACCEPT

sudo iptables -I INPUT 6 -m state --state NEW -p tcp --dport 21118 -j ACCEPT

sudo iptables -I INPUT 6 -m state --state NEW -p tcp --dport 21119 -j ACCEPT

sudo iptables -I INPUT 6 -m state --state NEW -p udp --dport 21116 -j ACCEPT

```
