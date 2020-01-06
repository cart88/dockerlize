FROM php:7.2.26-fpm-alpine3.11

ARG XDEBUG_PORT
ARG XDEBUG_IDE_KEY
ARG XDEBUG_REMOTE_HOST

ENV XDEBUG_PORT $XDEBUG_PORT
ENV XDEBUG_IDE_KEY $XDEBUG_IDE_KEY
ENV XDEBUG_REMOTE_HOST $XDEBUG_REMOTE_HOST

RUN apk update && apk add \
    build-base \
    curl-dev \
    libzip-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libxml2-dev \
    gettext-dev \
    autoconf \
    vim \
    && pecl install xdebug-2.6.0 \
    && docker-php-ext-install mysqli pdo pdo_mysql zip gd mbstring xml curl json gettext tokenizer bcmath \
    && docker-php-ext-enable xdebug

    RUN echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_handler=dbgp" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_connect_back=0" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_log=/tmp/xdebug_remote.log" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_port=$XDEBUG_PORT" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_idekey=$XDEBUG_IDE_KEY" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_host=$XDEBUG_REMOTE_HOST" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

    # https://github.com/mlocati/docker-php-extension-installer PHP docker插件安装