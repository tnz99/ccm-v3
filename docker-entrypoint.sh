#!/bin/bash

# Run migrations and seed the database
php artisan migrate --force
php artisan db:seed --force

# Start Apache
exec apache2-foreground
