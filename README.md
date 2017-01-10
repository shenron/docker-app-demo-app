# docker-app-demo-php

The idea is to explain how construct a full environment to run a "compex" WEB application.

---

This application need two versions of PHP, why ? Just because there is a legacy development and all new features have to been deployed with new version of PHP.
> - Legacy PHP application: `5.6.x`
> - New PHP application: `7.1.x`

Because the navigation between these applications is totally transparent for the user, only one authentication has been done. We have to share `$_SESSION` variable between all instances of PHP. A [memcache server](https://memcached.org/)  is the best way.

About static,
> - Legacy client files are stored in `front_lgcy` folder, so the Nginx for this service deserve static **and** PHP
> - New client files are stored in `static` folder (static and PHP are **dissociated**)


To manage all services there is a Nginx reverse proxy as front-end server.