FROM php:8.1-fpm

RUN apt-get update && \
    apt-get install -y vim zip unzip zlib1g-dev libpng-dev libjpeg-dev libfreetype6-dev

RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install -j$(nproc) gd

RUN docker-php-ext-install mysqli pdo_mysql

# install composer
COPY --from=composer:lts /usr/bin/composer /usr/bin/composer
# install node.js
COPY --from=node:lts /usr/local/bin /usr/local/bin
COPY --from=node:lts /usr/local/lib /usr/local/lib

RUN npm i -g yarn --force

EXPOSE 5173
