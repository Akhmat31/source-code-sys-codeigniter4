FROM php
RUN apt-get update && apt-get install -y git unzip libzip-dev docker-php-ext-install zip rm -rf /var/lib/apt/lists/*
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
WORKDIR /app
COPY . .
RUN composer install
EXPOSE 8080

CMD ["php", "spark", "serve", "--host=0.0.0.0", "--port=8080"]