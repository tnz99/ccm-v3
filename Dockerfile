FROM richarvey/nginx-php-fpm:latest

# Set working directory
WORKDIR /var/www/html/

# Copy the Laravel application files to the container
COPY . .

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libpq-dev \
    nodejs \
    npm
RUN docker-php-ext-install pdo pdo_pgsql gd
RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/*

# Install Composer dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer self-update --2 \
    && composer install --no-dev --optimize-autoloader

# Install Node.js dependencies and build assets
RUN npm install \
    && npm run build

# Set environment variables for the image
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel environment variables
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow Composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

# Copy Nginx site configuration
COPY ./conf/nginx-site.conf /etc/nginx/sites-available/default

# Set permissions for Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80 to the outside world
EXPOSE 80

CMD ["/start.sh"]
