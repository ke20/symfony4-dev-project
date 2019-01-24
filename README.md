[![Build Status](https://travis-ci.org/ke20/symfony4-dev-project.svg?branch=master)](https://travis-ci.org/ke20/symfony4-dev-project)

# What ?

This is a little base project to start new project with Symfony 4.

**Not to use in production ! Just useful for start a new development !**

This project requires [docker](https://www.docker.com/) and [docker-compose](https://docs.docker.com/compose/)

# Get started

```
$ git clone https://github.com/ke20/symfony4-dev-project my-project
$ cd my-project
$ docker-compose run --rm php composer install
$ docker-compose up -d
```

And go to [http://localhost](http://localhost)

# Some useful commands

Run composer command :
```
$ docker-compose exec php composer [options][command]
```

Run symfony command :
```
$ docker-compose exec php bin/console [options][command]
```

Run tests command:
```
$ docker-compose exec php bin/phpunit [options][command]
```
