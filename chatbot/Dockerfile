FROM php:7.4-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql

COPY . /var/www/html/

EXPOSE 8000