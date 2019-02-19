#!/bin/sh
echo "ricardo";
pwd;
cp .env.example .env;
composer dumpautoload;
composer install;
php artisan key:generate;