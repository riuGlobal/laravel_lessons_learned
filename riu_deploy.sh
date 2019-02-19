#!/bin/sh
cp .env.example .env;
composer install;
php artisan key:generate;