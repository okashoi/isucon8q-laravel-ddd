.PHONY: ide-helper/model lint/* test coverage/*

vendor/%:
	composer install

ide-helper/model: vendor/barryvdh/laravel-ide-helper
	php artisan ide-helper:model --write --reset

lint/cs: vendor/bin/phpcs
	./vendor/bin/phpcs -n --colors --standard="./phpcs.xml" --encoding="utf-8" app/ core/ tests/

lint/cbf: vendor/bin/phpcbf
	./vendor/bin/phpcbf --standard="./phpcs.xml" --encoding="utf-8" app/ core/ tests/

lint/md: vendor/bin/phpmd
	./vendor/bin/phpmd app/ text phpmd.xml

lint/stan: vendor/nunomaduro/larastan
	php artisan code:analyse --level=max --paths=app,core,tests

test: vendor/bin/phpunit
	./vendor/bin/phpunit

coverage/text: vendor/bin/phpunit
	./vendor/bin/phpunit --coverage-text

storage/coverage: vendor/bin/phpunit
	./vendor/bin/phpunit --coverage-html ./storage/coverage

coverage/html: storage/coverage
