FROM php:7.2-apache
# RUN apt-get install
COPY app/ /var/www/html/
ENV MY_APP_VAR some-value
RUN docker-php-ext-install mysqli