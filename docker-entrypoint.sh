#!/bin/bash
set -e

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Run migrations and seed the database
su www-data -s /bin/bash -c 'php /var/www/html/artisan db:wipe --force'
su www-data -s /bin/bash -c 'php /var/www/html/artisan migrate --force'
su www-data -s /bin/bash -c 'php /var/www/html/artisan db:seed --force'

# Start Apache
apache2-foreground