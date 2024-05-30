FROM richarvey/nginx-php-fpm:latest

COPY . /var/www/html

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

# Determine the package manager and install dependencies
RUN if [ -x "$(command -v apt-get)" ]; then \
    apt-get update && apt-get install -y postgresql-dev netcat && apt-get clean && rm -rf /var/lib/apt/lists/*; \
    elif [ -x "$(command -v apk)" ]; then \
    apk --no-cache add postgresql-dev netcat; \
    fi

# Ensure correct permissions
RUN chown -R nginx:nginx /var/www/html/storage /var/www/html/bootstrap/cache

# Copy entrypoint script
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

CMD ["/usr/local/bin/docker-entrypoint.sh"]
