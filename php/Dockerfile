# Dockerfile
FROM php:7.3-apache

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        git \
        zip \
        # php extensions
        && docker-php-ext-configure gd --with-png-dir=/usr/include --with-jpeg-dir=/usr/include \
        && docker-php-ext-install gd \
        && docker-php-ext-install pdo_mysql \
        # composer
        && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
        # mod_rewrite
        && mv /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled

COPY ./php.ini /usr/local/etc/php/
COPY ./apache2.conf /etc/apache2/apache2.conf
COPY ./000-default.conf /etc/apache2/sites-available/
# mod_rewriteを有効に
RUN /bin/sh -c a2enmod rewrite

WORKDIR /var/www

EXPOSE 80
