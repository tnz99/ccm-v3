#!/usr/bin/env bash
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
