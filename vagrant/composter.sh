#!/usr/bin/env bash
sudo curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
composer config -g github-oauth.github.com a89b572c8d006a10b323ca398d0fee6a784ca2d8
sudo aptitude install -q -y -f git
cd /var/www/base
if [ -d ./vergo ]; then
    cd ./vergo
    composer update --no-scripts
    php artisan clear-compiled
    php artisan optimize
else
    composer global require "laravel/installer"
    composer create-project laravel/laravel vergo --prefer-dist
fi