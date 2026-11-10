FROM composer:2 as composer

WORKDIR /app

COPY composer.json composer.lock* ./

RUN composer install --no-dev --no-interaction --no-progress \ 
    --prefer-dist --optimize-autoloader

FROM dunglas/frankenphp:1-php8.3

RUN install-php-extensions opcache pdo_sqlite sodium \
    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

WORKDIR /app

COPY . /app

COPY --from=composer /app/vendor ./vendor

ARG USER=appuser

RUN useradd ${USER} \
    && setcap CAP_NET_BIND_SERVICE=+ep /usr/local/bin/frankenphp \
    && mkdir -p storage/cache/views storage/backups storage/logs \
    && chown -R ${USER}:${USER} /data/caddy /config/caddy storage

USER ${USER}

EXPOSE 80