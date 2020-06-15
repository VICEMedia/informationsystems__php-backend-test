FROM php:7.3-alpine

ENV COMPOSER_ALLOW_SUPERUSER 1

#
RUN apk update

# Bash
RUN apk add bash

# Mysql
RUN docker-php-ext-install pdo_mysql

# Install composer
ADD https://getcomposer.org/installer /tmp/composer-setup.php
ADD https://composer.github.io/installer.sig /tmp/composer-setup.sig

RUN php -r "if (hash('SHA384', file_get_contents('/tmp/composer-setup.php')) !== trim(file_get_contents('/tmp/composer-setup.sig'))) { unlink('/tmp/composer-setup.php'); echo 'Invalid installer' . PHP_EOL; exit(1); }" \
  && php /tmp/composer-setup.php --quiet --no-ansi --install-dir=/usr/local/bin --filename=composer \
  && rm -rf /tmp/composer-setup.php
