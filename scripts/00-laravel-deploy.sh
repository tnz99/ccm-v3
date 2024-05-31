#!/usr/bin/env bash

# Install Composer dependencies
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
composer self-update --2
composer install --no-dev --optimize-autoloader

# Install Node.js dependencies and build assets
npm install && npm run build

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

php artisan serve --host 0.0.0.0 --port 80