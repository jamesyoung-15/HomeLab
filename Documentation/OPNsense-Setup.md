# My OPNSense Setup

This journal documents instructions for setting up OPNSense based on my experience. Most instructions are followed with [documentation](https://docs.opnsense.org/index.html).

## OPNSense Intro

For my home network, I will be using OPNSense as my firewall/router . OPNSense is open source and FreeBSD based and is a fork of pfSense. I have used pfSense in the past but decided to switch over to OPNSense (see bottom for reason).

A basic diagram of my inital testing setup is shown below.

## OPNSense Setup

### Installation Setup

Installation is simple enough, download the [image](https://opnsense.org/download/) and flash it to a USB drive. For most cases choose type vga for the image and for flashing the image to disk I used balena-etcher. Then, plug USB drive to OPNSense device and boot into USB drive by changing BIOS boot order to OPNSense from USB.

Once booted into the installer, the live environment should show up. Login with user: installer and password: opnsense set by default. Install OPNSense to the main drive used inside the OPNSense device. I chose UFS but ZFS is recommended in the documentation (didn't check properly at the time but oh well).

### Initial Config

Once OPNSense has been installed, unplug the USB drive and boot into OPNSense. Once the live environment starts, login with user: root and password: opnsense. Check the LAN and WAN interfaces, if they're not mapped to the correct port change them with assign interfaces option.

## Sidenote: Why OPNSense

Although a normal consumer router's built-in firewall and routing capabilities are most likely enough for my needs, I decided to get a firewall mini-pc and use it as my firewall and router. The reason for doing this is mainly educational, as firewall/router software such as pfSense and OPNSense provides much greater capabilities and control with constant security updates and great documentation. Obviously I won't need a lot of the capabilities they offer, but it is good to have them as an option.

As for why I decided to use OPNSense over pfSense, this was mainly due to Netgate's (developer of pfSense) behaviour against OPNSense (see [here](https://opnsense.org/opnsense-com/)) and their seemingly gradual shift away from open source (see [here](https://github.com/rapi3/pfsense-is-closed-source). Also I personally prefer OPNSense's UI and like their documentation slightly better, but overall from a basic tech standpoint they function and perform similar enough and neither are bad choices.