FROM php:7.4-fpm-buster

# dockerにcomposerをインストール
COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
# laravelに必要なパッケージをインストール
  apt-get -y install git unzip libzip-dev libicu-dev libonig-dev && \
  # パッケージインストールで使用したキャッシュを削除
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  # phpの拡張ライブラリをインストール
  docker-php-ext-install intl pdo_mysql zip bcmath && \
  # xdebugをインストール
  pecl install xdebug && \
  docker-php-ext-enable xdebug

COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /work
