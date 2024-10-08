# Config files

These are config files for tunneling traffic through a VPS to my home server via Wireguard. This way I do not have to directly expose my home server to the internet. For full setup guide and explanation see [here](../Documentation/Tunnel.md). 

The nginx config files are in `/etc/nginx/sites-enabled/jyylab.com` (or whichever domain was set). The Wireguard config files are into `/etc/wireguard`.

## Increase Upload Limit Size for Nginx

To avoid `413 Request Entity Too Large` when uploading files through Nginx, add the following lines to the config (either `/etc/nginx/nginx.conf` or `/etc/nginx/sites-enabled/***.com`) file in the `http`, `server`, or `location` section:

``` conf
client_max_body_size 1G;
client_body_buffer_size 40M;
```
