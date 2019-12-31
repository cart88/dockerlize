FROM php:7.2.26-fpm-alpine3.11

RUN apk update && apk add \
    curl-dev \
    libzip-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libxml2-dev \
    gettext-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql zip gd mbstring xml curl json gettext tokenizer bcmath

    # https://github.com/mlocati/docker-php-extension-installer PHP docker插件安装