FROM php:8.2-fpm-alpine3.21

COPY . /var/www/project
WORKDIR /var/www/project