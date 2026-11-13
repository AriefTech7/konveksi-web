# menentukan base image yang akan digunakan pada kontainer
FROM php:8.3-fpm

# menginisialisasi variabel sementara yang akan digunakan pada dockerfile ini
ARG UID=1000
ARG GID=1000

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    libpq-dev \
    && docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    bcmath \
    exif \
    gd \
    intl \
    mbstring \
    opcache \
    pcntl \
    pdo_mysql \
    zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*



COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN groupadd --gid ${GID} appgroup \
    && useradd --uid ${UID} --gid ${GID} --create-home --shell /bin/bash appuser

# menentukan tempat kerja (direktori aktif) pada kontainer untuk perintah" selanjutnya
WORKDIR /var/www/html

COPY --chown=appuser:appgroup  composer.json composer.lock /app/

RUN composer install \
    --no-interaction \
    --prefer-dist \
    --no-scripts \
    --no-progress

COPY --chown=appuser:appgroup . .

RUN mkdir -p storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    bootstrap/cache \
    && chown -R appuser:appgroup storage bootstrap/cache \
    && chmod -R ug+rwx storage bootstrap/cache

# menentukan user yang akan digunakan pada perintah" selanjutnya
USER appuser

# menentukan port yang akan dilisten oleh docker
EXPOSE 9090


CMD [ "php-fpm","-F" ]

# kenapa membuat user pada dockerfile?
# supaya direktori yang dibuat dari dockerfile ini hanya bisa diakses oleh user tersebut dan root, tanpa
# campur tangan orang lain

# Note:
# base image ini menggunakan os debian yang sudah menjadi standar default di docker hub
