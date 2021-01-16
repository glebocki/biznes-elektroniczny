FROM php:5.6-apache

# Prestashop dependencies
RUN apt-get update \
	&& apt-get install -y libmcrypt-dev \
	libjpeg62-turbo-dev \
	libpng-dev \
	libfreetype6-dev \
	libxml2-dev \
	git \
	&& rm -rf /var/lib/apt/lists/* \
	&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
	&& docker-php-ext-install iconv mcrypt opcache pdo mysql pdo_mysql mbstring soap gd zip

RUN a2enmod rewrite
 # ^append ssl if needed for presta to use ssl directly
 # keep in mind that when using a load balancer like nginx
 # in this project, enforcing https by presta will cause
 # a redirect loop

# RUN git clone \
#     https://github.com/wazniak96/BiznesElektroniczny.git \
#     /var/www/html
ADD prestashop /var/www/html

# RUN mkdir /var/www/html/var
# RUN mkdir /var/www/html/var/logs
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 777 /var/www/html