# Maestro - PHP7 Framework [Docker Container]

This repository contains a guide for Maestro PHP Framework.

### Prerequisities


In order to run this container you'll need docker installed.

* [Windows](https://docs.docker.com/windows/started)
* [OS X](https://docs.docker.com/mac/started/)
* [Linux](https://docs.docker.com/linux/started/)

### Usage

Create a local installation for Maestro:

* Clone this repository at an accesible folder

```sh
$ git clone https://github.com/FrameNetBrasil/mguide.git
$ cd mguide
```

* Create conf files from dist

```sh
$ cd core/conf
$ cp conf.dist.php conf.php
```

```sh
$ cd apps/mguide/conf
$ cp conf.dist.php conf.php
```

* Start the container

```sh
$ cd devops/docker
$ docker-compose up
```
 
* Access the app at http://localhost:8020 (with user = webtool password = test)

#### Container Parameters

Parameters are available to the container (mainly the webserver port) at

```shell
/home/mguide/devops/docker/.env
```

## Built With

* PHP 7.4
* MariaDb 10.4
* PhpMyAdmin 5.0.1
* Framework Maestro 3.0

## Find Us

* [GitHub](https://github.com/FrameNetBrasil)
* [FrameNet Brasil](http://www.ufjf.br/framenetbr-eng/)

## Contributing
* Create a new branch with a meaningful name `git checkout -b branch_name`.<br />
* Develop your feature on Xcode IDE  and run it .<br />
* Add the files you changed `git add file_name`.<br />
* Commit your changes `git commit -m "Message briefly explaining the feature"`.<br />
* Keep one commit per feature. If you forgot to add changes, you can edit the previous commit `git commit --amend`.<br />
* Push to your repo `git push --set-upstream origin branch-name`.<br />
* Go into [the Github repo](https://github.com/FrameNetBrasil/webtool.git) and create a pull request explaining your changes.<br />

## License

GNU GPLv3 - See the [COPYING](COPYING) file for license rights and limitations.
