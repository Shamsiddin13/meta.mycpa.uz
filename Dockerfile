FROM php:8.3-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    curl \
    git \
    zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    && docker-php-ext-install pdo pdo_mysql zip curl

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy Laravel project files
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Fix permissions (optional)
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache

# Expose port (optional for local dev)
EXPOSE 3010

# Run Laravel app via built-in PHP server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=3010"]
