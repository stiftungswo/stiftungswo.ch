# stiftungswo.ch
[![Build Status](https://travis-ci.org/stiftungswo/stiftungswo.ch.svg?branch=master)](https://travis-ci.org/stiftungswo/stiftungswo.ch)
[![codecov](https://codecov.io/gh/stiftungswo/stiftungswo.ch/branch/master/graph/badge.svg)](https://codecov.io/gh/stiftungswo/stiftungswo.ch)

## General Purpose

This is the new main Website of the SWO
  
## Language

stiftungswo.ch is developed in and used by a foundation in the German speaking part of Switzerland. Development is done in German and the UI is in German as well.

## Entwicklung
### Vorbereitung
#### Commit Hooks
Damit der Code einheitlich formatiert bleibt, wird ein pre-commit Hook verwendet. Der Travis-Build failt, wenn der Code nicht richtig formatiert ist. 

#### Homebrew für Mac
Fast jede Linux-Distribution wird mit einem Paketmanager ausgeliefert. Diese ermöglichen dir, bequem neue Programme zu installieren, ohne dazu eine aufwendige Installation durchführen zu müssen. Unter Mac hat die Community homebrew entwickelt, um einen solchen Paketmanager auf Mac bereitzustellen.

Die Installation kann im Terminal mit einem Einzeiler angestossen werden, welcher sich auf der [offiziellen Website](https://brew.sh/index_de) befindet.

#### Docker
Installation gemäss der Installationsanleitung auf der [Website](https://docs.docker.com/install/) durchführen. Wichtig: Für manche Betriebssysteme muss docker-compose noch separat installiert werden.

### Installation der Dev-Server
1. Ins Verzeichnis des Repository wechseln (z.B. ``cd ~/src/swo/stiftungswo.ch``).
2. `ln -s $(pwd)/hooks/pre-commit $(pwd)/.git/hooks` um den Git Hook zu aktivieren.
3. Docker-Compose-Stack starten: ``docker-compose up -d``
4. Datenbank in phpmyadmin (`localhost:58080`) mit dem Namen `stiftungswo2019` erstellen.<br>
   Server: `mysql`, Benutername: `root` und Passwort leer lassen.
5. oc-bootstraper October CMS installieren lassen: ``docker exec stiftungswo_app october install``
6. ``rm $(pwd)/app/composer.json``<br>
   ``mv $(pwd)/app/composer.json.example $(pwd)/app/composer.json``<br>
   ``ln $(pwd)/app/composer.json $(pwd)/app/composer.json.example``<br>
    `composer.json` wurde von ``october install`` überschrieben, wir ersetzen es wieder durch unseres.
7. ``docker exec stiftungswo_app composer dump-autoload`` um die Composer Autoload Files generieren zu lassen. 
8. ``docker exec stiftungswo_app php artisan october:util set build`` um die installierte October Version in der Datenbank zu vermerken.
9. Die October installation ist nun unter `localhost:58000` erreichbar.

