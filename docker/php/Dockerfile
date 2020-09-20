FROM php:7.4-fpm-buster

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_NO_INTERACTION 1

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
  apt-get -y install git unzip libzip-dev libicu-dev libonig-dev && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  docker-php-ext-install intl pdo_mysql zip bcmath


COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /work

RUN chmod -R 777 storage/ bootstrap/cache/