PHP  := docker-compose exec php-cli

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

composer:
	$(PHP) composer $(CMD)
