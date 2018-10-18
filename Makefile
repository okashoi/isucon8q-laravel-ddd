PHP  := docker-compose exec php-cli
NODE := docker-compose run --rm node

.env:
	cp .env.example .env

src/.env:
	cp src/.env.example src/.env

setup: .env src/.env
	$(MAKE) up
	$(MAKE) composer CMD=install
	$(MAKE) artisan CMD=key:generate
	$(MAKE) npm CMD=install
	$(MAKE) npm CMD=run dev

up: .env
	docker-compose up -d --build

down:
	docker-compose down

artisan: src/.env
	$(PHP) php artisan $(CMD)

composer:
	$(PHP) composer $(CMD)

npm:
	$(NODE) npm $(CMD)
