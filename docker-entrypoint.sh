#!/bin/bash

# Wait for the PostgreSQL database to be ready
while ! nc -z db 5432; do
  echo "Waiting for PostgreSQL..."
  sleep 1
done

# Run migrations and seed the database
php artisan migrate --force
php artisan db:seed --force

# Start Apache
exec apache2-foreground
