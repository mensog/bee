FROM php:8.0.2-fpm

RUN apt-get update && apt-get install -y git unzip libpng-dev libjpeg-dev libfreetype6-dev curl && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -sL https://deb.nodesource.com/setup_14.x | bash - && \
    apt-get install -y nodejs

WORKDIR /app
