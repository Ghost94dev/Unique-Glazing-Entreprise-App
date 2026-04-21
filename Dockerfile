FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    unzip git curl libzip-dev zip \
    && docker-php-ext-install zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

ENV APP_ENV=production \
    APP_DEBUG=false \
    CACHE_STORE=file \
    SESSION_DRIVER=file \
    QUEUE_CONNECTION=sync \
    PORT=10000

COPY . .

RUN composer install --no-dev --optimize-autoloader

# ensure public assets exist
RUN ls -la public/css || true
RUN ls -la public/js || true

# Create SQLite DB (for testing)
RUN touch database/database.sqlite

EXPOSE 10000

CMD ["sh", "-c", "php -S 0.0.0.0:${PORT} -t public"]
