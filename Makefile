PHP  := docker-compose exec php-cli

.PHONY: setup up down artisan artisan/* composer

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
