# FROM php:8.2-alpine

# # Install system dependencies
# RUN apt-get update && apt-get install -y \
#     git \
#     curl \
#     zip \
#     unzip \
#     libpng-dev \
#     libjpeg-dev \
#     libfreetype6-dev \
#     libpq-dev \
#     nodejs \
#     npm

# RUN apt-get install -y docker-php-ext-install pdo pdo_pgsql gd
# RUN apt-get clean
# RUN rm -rf /var/lib/apt/lists/*

# # Set working directory
# WORKDIR /var/www/html/

# # Copy the Laravel application files to the container
# COPY . .

# # Set environment variables for the image
# ENV SKIP_COMPOSER 1
# ENV WEBROOT /var/www/html/public
# ENV PHP_ERRORS_STDERR 1
# ENV RUN_SCRIPTS 1
# ENV REAL_IP_HEADER 1

# # Laravel environment variables
# ENV APP_ENV production
# ENV APP_DEBUG false
# ENV LOG_CHANNEL stderr

# # Allow Composer to run as root
# ENV COMPOSER_ALLOW_SUPERUSER 1

# # Set permissions for Laravel
# RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
#     && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# # Expose port 80 to the outside world
# EXPOSE 80
# COPY start.sh start.sh
# RUN chmod +x /start.sh

# CMD ["/start.sh"]

FROM php:8.2-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Install PHP extensions and dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-install pdo pdo_mysql gd


RUN apt-get -y install nodejs
RUN apt-get -y install npm
RUN apt-get install -y default-mysql-client \
    && rm -rf /var/lib/apt/lists/*

RUN npm install -y vite
# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the Laravel application files to the container
COPY . .

# Set Apache DocumentRoot
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Change Apache's default port to 8000
RUN sed -i 's/80/8000/g' /etc/apache2/ports.conf /etc/apache2/sites-available/*.conf

# Expose port 8000 to the outside world

RUN composer install

EXPOSE 8000
EXPOSE 8001

# Start Apache server
CMD ["apache2-foreground"]
