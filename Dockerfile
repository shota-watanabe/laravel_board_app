FROM php:8.0-fpm

COPY --from=composer:2.3.10 /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get install -y zip unzip

RUN curl -sL https://deb.nodesource.com/setup_18.x | bash -

RUN apt-get install -y nodejs

RUN docker-php-ext-install pdo pdo_mysql