#!/bin/bash

# Run migrations and seed the database
php /var/www/html/artisan migrate --force
php /var/www/html/artisan db:seed --force

# Start Nginx and PHP-FPM
/start.sh
