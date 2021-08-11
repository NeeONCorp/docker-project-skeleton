FROM php:7.2-apache
WORKDIR /var/www/html

RUN apt update
RUN apt install -y wget
RUN apt-get install -y libcurl4-openssl-dev pkg-config libssl-dev
RUN pecl install mongodb-1.10.0
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
RUN echo "extension=mongodb.so" >> "$PHP_INI_DIR/php.ini"

EXPOSE 80