# Setup VLANs with OPNSense

I mainly follow [homenetworkguy's guide](https://homenetworkguy.com/how-to/set-up-a-fully-functioning-home-network-using-opnsense/). Only difference was I setup a management VLAN rather than using trunk as management.

## Some Notes

Since I already had a flat network setup, when adding VLAN interfaces I forgot to update DNS which led to my devices on the VLAN having extremely slow internet. Useful tools for debugging stuff like this were `dig`, `ping`, `iperf`. Mainly using `dig` made me realize that I forgot to add UnBound DNS to my VLAN interfaces.