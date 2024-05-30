#!/bin/bash

# Wait for the PostgreSQL database to be ready
while ! nc -z db 5432; do
  echo "Waiting for PostgreSQL..."
  sleep 1
done

# Run migrations and seed the database
php /var/www/html/artisan migrate --force
php /var/www/html/artisan db:seed --force

# Start Nginx and PHP-FPM
/start.sh
