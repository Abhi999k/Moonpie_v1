# Start from official PHP image with extensions needed for Laravel
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    libzip-dev \
    libpq-dev && \
    docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy existing application directory
COPY . .

# Set permissions (important for Laravel)
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose port for Laravel server
EXPOSE 8080

# Set correct permissions
RUN mkdir -p storage/framework/{cache,sessions,views} && \
    mkdir -p storage/logs && \
    chmod -R 775 storage bootstrap/cache

# Install Node.js and npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs
    

# Add this before CMD
RUN npm install && npm run build

# Serve Laravel app
CMD php artisan serve --host=0.0.0.0 --port=8080
