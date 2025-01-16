FROM php:8.2-fpm-alpine3.21 as builder

WORKDIR /var/www/

# Install dependencies
RUN apk add --no-cache php82 \
    php82-common \
    php82-fpm \
    php82-pdo \
    php82-opcache \
    php82-zip \
    php82-phar \
    php82-iconv \
    php82-cli \
    php82-curl \
    php82-openssl \
    php82-mbstring \
    php82-tokenizer \
    php82-fileinfo \
    php82-json \
    php82-xml \
    php82-xmlwriter \
    php82-simplexml \
    php82-dom \
    php82-pdo_mysql \
    php82-pdo_sqlite \
    php82-tokenizer \
    php82-pecl-redis \
    vim \
    nano

# Install PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN ln -s /usr/bin/php82 /usr/bin/php

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY php.ini $PHP_INI_DIR/conf.d/zz-fine-tuning.ini

COPY after.sh /var/www/aeg/after.sh

EXPOSE 80
CMD ["php-fpm"]
ENTRYPOINT ["/var/www/aeg/after.sh"]

RUN chown -R www-data:www-data /var/www

#COPY --chown=www-data:www-data --from=builder /var/www /var/www