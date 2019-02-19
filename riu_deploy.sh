#!/bin/sh
echo "ricardo";
pwd;
cp .env.example .env;
composer install;
php artisan key:generate;