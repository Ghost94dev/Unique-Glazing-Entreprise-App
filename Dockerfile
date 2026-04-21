FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    unzip git curl libzip-dev zip \
    && docker-php-ext-install zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --no-dev --optimize-autoloader

# ensure public assets exist
RUN ls -la public/css || true
RUN ls -la public/js || true

# Create SQLite DB (for testing)
RUN touch database/database.sqlite

EXPOSE 10000


CMD php artisan optimize:clear && \
php artisan config:clear && \
php artisan cache:clear && \
php artisan config:cache && \
php artisan route:cache && \
php artisan view:cache && \
php -S 0.0.0.0:10000 -t public