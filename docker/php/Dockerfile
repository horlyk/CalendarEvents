FROM php:7.4-fpm

ARG TIMEZONE
ARG XDEBUG_HOST

# Install soft
RUN apt-get update && apt-get install -y \
    openssl \
    git \
    unzip \
    mc

RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

# Set timezone
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone
RUN printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini
RUN "date"

WORKDIR /var/www/CalendarEvents
