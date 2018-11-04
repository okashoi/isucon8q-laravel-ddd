.PHONY: ide-helper/model

vendor/%:
	composer install

ide-helper/model: vendor/barryvdh/laravel-ide-helper
	php artisan ide-helper:model --write --reset
