FROM php:7.3.17-apache

WORKDIR /

RUN apt-get update && apt-get install -y \
  wget \
  libpng-dev \
  libzip-dev \
  zip \
  unzip

ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/

RUN chmod uga+x /usr/local/bin/install-php-extensions && sync
RUN install-php-extensions \
    gd \
    opcache \
    zip \
    redis \
    pdo_mysql \
    mcrypt

# RUN docker-php-ext-install gd && \
#   docker-php-ext-install opcache && \
#   docker-php-ext-configure zip --with-libzip && \
#   docker-php-ext-install zip && \
#   docker-php-ext-install redis && \
#   docker-php-ext-install pdo_mysql

# RUN apt-get install -y gnupg2 && \
#     apt-get install -y libxrender1 \
#     libfontconfig1 \
#     libx11-dev \
#     libjpeg62 \
#     libxtst6  && \
#     a2enmod proxy ssl proxy_http proxy_ajp rewrite

COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY php.ini-development $PHP_INI_DIR/php.ini
COPY ./docker-entrypoint.sh /docker-entrypoint.sh
RUN chmod +x /docker-entrypoint.sh

WORKDIR /var/www/html
