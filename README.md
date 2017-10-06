# What ?

This is a little base project to start new project with Symfony 4.

**Not to use in production ! Just useful for start a new development !**

This project requires [docker](https://www.docker.com/) and [docker-compose](https://docs.docker.com/compose/)

# Get started

```
$ git clone https://github.com/ke20/symfony4-dev-project
$ cd symfony4-dev-project
$ docker-compose run --rm app composer install
$ docker-compose up -d
```

And go to [http://localhost:8001](http://localhost:8001)

# Some useful commands

Run composer command :
```
$ docker-compose exec app composer [options][command]
```

Run symfony command :
```
$ docker-compose exec app bin/console [options][command]
```
