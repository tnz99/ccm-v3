#!/bin/bash
set -e

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Run migrations and seed the database
php artisan db:wipe
php artisan migrate
php artisan db:seed

# Start Apache
apache2-foreground
