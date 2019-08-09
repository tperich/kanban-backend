FROM jguyomard/laravel-php

# Install required tools
# RUN apt-get update && apt-get install openssl zip unzip git -y
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# RUN docker-php-ext-install pdo mbstring

# Copy files to container
WORKDIR /app
COPY ./src /app

# Install dependencies
RUN composer install
RUN chown -R www-data:www-data /app/storage
RUN chown -R www-data:www-data /app/bootstrap/cache
