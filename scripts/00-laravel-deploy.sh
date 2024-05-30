#!/usr/bin/env bash
echo "Running composer"
#composer global require hirak/prestissimo
composer self-update --2
composer install --no-dev --working-dir=/var/www/html

npm run build

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Wiping db"
php artisan db:wipe

echo "Running migrations..."
php artisan migrate --force

echo "Seeding data"
php artisan db:seed
