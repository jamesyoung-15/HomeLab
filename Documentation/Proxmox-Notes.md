# Proxmox Notes

## Changing Proxmox Node Hostname

For renaming a Proxmox node, refer to the [documentation](https://pve.proxmox.com/wiki/Renaming_a_PVE_node). Basically if there are no VMs, LXCs, storage, and is not part of a cluster, then you only need to edit `/etc/hosts`, `/etc/hostname`, and `/etc/postfix/main.cf`. 

In general it is not recommended to change the hostname if the node is not empty or is part of a cluster. However it is possible to change hostname for a non-cluster node with VMs and LXCs as shown below, but you need to be careful not to mess up when moving VMs and LXCs across the old hostname to new hostname:

First, update `/etc/hosts`, `/etc/hostname`, and `/etc/postfix/main.cf`. 

Then, make a backup of the current node ie: `cp -r /etc/pve/nodes/OLD-HOSTNAME /root/` and reboot the server.

After reboot, update `/etc/pve/storage.cfg` with new hostname. 

Move all VM and LXC from old hostname to new hostname (ie: `mv /etc/pve/nodes/OLD-HOSTNAME/qemu-server/* /etc/pve/nodes/NEW-HOSTNAME/qemu-server` and `mv /etc/pve/nodes/OLD-HOSTNAME/lxc/* /etc/pve/nodes/NEW-HOSTNAME/lxc`).

Restart the server again and if the VMs and LXCs migrated, then remove the old files (ie: `rm -rf /etc/pve/nodes/OLD-HOSTNAME`) and reboot.

### Potential Errors

I encountered an error where when trying to move LXCs I made a mistake of copying the folders twice, leading to a SQL database error for the node (error said something like `crit: found entry with duplicate name 'lxc'`). To fix this see the following forum threads: [duplicate entry error](https://forum.proxmox.com/threads/hostname-changed-now-nodes-gone-from-etc-pve.111607/) and [missing directory error](https://forum.proxmox.com/threads/proxmox-4-4-failed-database-crit-missing-directory-inode.32622/). The error can be found by running `systemctl status pve-cluster.service`, and it is basically resolved by running some SQL commands to fix the database (ie. either inserting relevant data or removing data).

## Change Existing Proxmox IP

To change the static IP to the VLAN range, edit `/etc/network/interfaces` and change the existing gateway and address. Also change the IP address in the host file in `/etc/hosts`. Also make sure to edit `/etc/resolv.conf` to update the DNS server. Also make sure to change the IPs and gateway as well for any VMs and LXCs networks if you have static IP set for them.
