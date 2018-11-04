PHP  := docker-compose exec php-cli

.PHONY: setup up down artisan artisan/* composer lint/*

.env:
	cp .env.example .env

src/.env:
	cp src/.env.example src/.env

setup: .env src/.env
	$(MAKE) up
	$(MAKE) composer CMD=install
	$(MAKE) artisan CMD=key:generate

up: .env
	docker-compose up -d --build

down:
	docker-compose down

artisan: src/.env
	$(PHP) php artisan $(CMD)

artisan/ide-helper/model: src/.env
	$(PHP) make ide-helper/model

composer:
	$(PHP) composer $(CMD)

lint/cs:
	$(PHP) make lint/cs

lint/cbf:
	$(PHP) make lint/cbf

lint/md:
	$(PHP) make lint/md

lint/stan:
	$(PHP) make lint/stan
