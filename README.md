# docker-app-demo-php

The idea is to explain how construct a full environment to run a "compex" WEB application.

---

This application need two versions of PHP, why ? Just because there is a legacy development and all new features have to been deployed with new version of PHP.
> Legacy PHP application: `5.6.x`
> New PHP application: `7.1.x`

Because the navigation between these applications is totally transparent for the user, only one authentication has been done. We have to share `$_SESSION` variable between all instances of PHP. A [memcache server](https://memcached.org/)  is the best way.

The client part is written in HTML5 (JavaScript/CSS), a Nginx server deserve this files.

To manage all parts, the front end (entrypoint of application) 