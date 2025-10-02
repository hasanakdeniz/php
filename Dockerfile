FROM php:8.3-fpm-alpine

# Sistem bağımlılıklarını yükle
RUN apk add --no-cache \
    libpng-dev \
    libjpeg-turbo-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install pdo_mysql gd zip

# Composer'ı yükle
COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

# Composer'ın çalıştığını doğrula
RUN composer --version

# Çalışma dizini ayarla
WORKDIR /var/www/html

# Uygulama kodunu kopyala (app klasöründen)
COPY app /var/www/html

# Composer dependencies'i yükle (eğer composer.json varsa)
RUN if [ -f app/composer.json ]; then \
        composer install --no-dev --optimize-autoloader; \
    else \
        echo "composer.json bulunamadı, bağımlılıklar yüklenmedi."; \
    fi

# PHP konfigürasyon ayarlarını yap
RUN echo "memory_limit=256M" > /usr/local/etc/php/conf.d/custom.ini \
    && echo "error_reporting=E_ALL" >> /usr/local/etc/php/conf.d/custom.ini \
    && echo "display_errors=On" >> /usr/local/etc/php/conf.d/custom.ini

# Kullanıcı izinlerini ayarla
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html
# PHP-FPM'in varsayılan portunu tanımla
EXPOSE 9000

# PHP-FPM'i çalıştır
CMD ["php-fpm"]
