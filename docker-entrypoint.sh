#!/bin/bash

# Run migrations and seed the database
php artisan db:wipe
php artisan migrate
php artisan db:seed

# Start Apache
exec apache2-foreground
