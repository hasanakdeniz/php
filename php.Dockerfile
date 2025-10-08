FROM php:8.3-fpm-alpine

# Sistem bağımlılıklarını yükle
RUN apk add --no-cache \
    libpng-dev \
    libjpeg-turbo-dev \
    libzip-dev \
    && addgroup -g 33 php \
    && adduser -u 33 -G php -s /bin/sh -D php \
    && docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install mysqli pdo_mysql gd zip \
    && rm -rf /var/cache/apk/*

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

RUN composer --version

RUN echo "memory_limit=256M" > /usr/local/etc/php/conf.d/custom.ini \
    && echo "error_reporting=E_ALL" >> /usr/local/etc/php/conf.d/custom.ini \
    && echo "display_errors=On" >> /usr/local/etc/php/conf.d/custom.ini

RUN chown -R 33:33 /var/www/html \
    && find /var/www/html -type d -exec chmod 775 {} \; \
    && find /var/www/html -type f -exec chmod 664 {} \;

USER 33

EXPOSE 9000

CMD ["php-fpm"]
