# My Home Server

My ongoing home network for running self-hosted applications (like Nextcloud) and storing other projects (eg. own static websites, etc.).

## Self-hosted Services

Currently still exploring more, these are just the main ones that I use regularly.

- Grafana/Prometheus (Monitoring)
- Nextcloud (Online Storage, Calendar, Tasks, etc.)
- Jellyfin (Music, Movies, Media)
- Own stuff
  - Static websites (eg. portfolio website, blog posts, resume, etc.)

## Overall Network

The basic idea is that for accessing the home server outside of my local network, I use a VPS connected to my home server via Wireguard to access services externally if needed. I use Nginx as my reverse proxy in this scenario. This way I don't have to directly expose my network but rather tunnel my traffic through the VPS.

Most of my services are hosted on Proxmox through LXC or VM. See diagram below for a general idea of my home server.

Incomplete diagram below:

![Diagram](./Documentation/Diagrams/HomeNetwork.drawio.png)

## Own Documentation

My own notes are in [documentation folder](./Documentation/).

### Helpful Resources

- My Fav Forums:
  - Subreddits:
    - [Selfhosted](https://www.reddit.com/r/selfhosted/)
    - [Homelab](https://www.reddit.com/r/homelab/)
    - [Homeserver](https://www.reddit.com/r/HomeServer/)
    - [Minilab](https://www.reddit.com/r/minilab/)
    - [HomeNetwork](https://www.reddit.com/r/HomeNetworking)
  - Lemmy Forums:
    - Selfhosted
- Some Homelab Youtube Channels:
  - [Lawrence Systems](https://www.youtube.com/@LAWRENCESYSTEMS)
  - [Home Network Guy](https://www.youtube.com/@homenetworkguy)
  - [Techno Tim](https://www.youtube.com/results?search_query=technotim)
  - [Christian Lempa](https://www.youtube.com/@christianlempa)
  - [Linus Tech Tips](https://www.youtube.com/@LinusTechTips)
  - [apalrd's adventures](https://www.youtube.com/@apalrdsadventures)
  - [MRP](https://www.youtube.com/@MRPtech)
