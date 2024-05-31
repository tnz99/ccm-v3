FROM php:8.2-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Install PHP extensions and dependencies, and Node.js with npm
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    default-mysql-client \
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_mysql gd \
    && rm -rf /var/lib/apt/lists/*

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

# Install Node.js dependencies and Vite
RUN npm install && npm install vite

# Install PHP dependencies with Composer
# Expose port 8000 to the outside world.

RUN composer install

# Expose ports 8000 and 8001 to the outside world
EXPOSE 8000
EXPOSE 8001

# Start Apache server
CMD ["apache2-foreground"]
