FROM php:7.2-apache

RUN apt-get update -y && apt-get install -y libpng-dev

RUN docker-php-ext-install mysqli pdo_mysql

RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-configure zip --with-libzip \
  && docker-php-ext-install zip

RUN docker-php-ext-install gd

RUN apt-get -y update \
&& apt-get install -y libicu-dev \
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl

RUN a2enmod rewrite
