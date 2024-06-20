# docker/php/Dockerfile

FROM php:8.1-fpm

# Установка Composer
RUN apt-get update && apt-get install -y \
    unzip git \
    && docker-php-ext-install pdo_mysql \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

WORKDIR /var/www/src