FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl \
    && docker-php-ext-install pdo pdo_mysql zip

RUN pecl install redis && docker-php-ext-enable redis

WORKDIR /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
