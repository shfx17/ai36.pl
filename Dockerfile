FROM php:8.2-cli

# Install and configuration
RUN apt-get update && apt-get install -y \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Set workspace
WORKDIR /app

# Copy application files
COPY . .
COPY .env.example .env

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- \
    && mv composer.phar /usr/local/bin/composer

# Run composer
RUN composer install --no-dev --optimize-autoloader

# Expose 8030
EXPOSE 8030
