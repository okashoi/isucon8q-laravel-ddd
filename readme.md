# [WIP] isucon8q-laravel-ddd

This repository is an implementation of [ISUCON 8 qualifier application](https://github.com/isucon/isucon8-qualify) with PHP 7.2 + Laravel 5.7 & layered architecture pattern.

## Requirement

* Docker 1.13.0+
* Docker Compose

## Usage

### Initial setup

```bash
git clone git@github.com:okashoi/isucon8q-laravel-ddd
cd isucon8q-laravel-ddd
```

```bash
# environment variables for Docker Compose
cp .env.example .env
vim .env

# environment variables for Laravel
cd src
cp .env.example .env
vim .env
```

```bash
make setup
```

### Start application

```bash
make up
```

### Stop application

```bash
make down
```

### Execute artisan

```bash
make artisan CMD=<subcommand>

# example: run migration
make artisan CMD=migrate
```

### Execute composer

```bash
make composer CMD=<subcommand>

# example: install php dependencies
make composer CMD=install
```

### Run test

```bash
make test
```

Show coverage report in plaintext.

```bash
make coverage/text
```

Generate coverage report in HTML format.

```bash
make coverage/html
```

The report will be generated under the directory `src/storage/coverage`.

### Execute lint tools

```bash
# PHP CodeSniffer
make lint/cs

# Autofix some PHP Codesniffer erros (phpcbf)
make lint/cbf

# PHPMD
make lint/md

# PHPStan (Larastan)
make lint/stan
```

See also:

* [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)
* [PHPMD](https://phpmd.org/)
* [Larastan](https://github.com/nunomaduro/larastan)
