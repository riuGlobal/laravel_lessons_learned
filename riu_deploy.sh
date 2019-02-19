#!/bin/sh
echo "ricardo";
pwd;
cp .env.example .env;
composer install;
#composer  update;
echo "about to get key";
php artisan key:generate;