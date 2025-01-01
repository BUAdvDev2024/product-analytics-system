# Use an official PHP runtime as the base image
FROM php:8.2-fpm-alpine

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install system dependencies
RUN apk add --no-cache openssl zip unzip git curl

# Install Composer (if not already installed in your base image)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install NPM (if not already installed in your base image)
RUN apk add --no-cache nodejs npm

# Install NPM packages (this should be in the correct directory with package.json)
RUN npm install
RUN npm run build

# Copy the entrypoint script into the container
COPY entrypoint.sh /usr/local/bin/entrypoint.sh

# Make sure the entrypoint script is executable
RUN chmod +x /usr/local/bin/entrypoint.sh

# Set the entrypoint
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

# Expose necessary ports (if needed)
# EXPOSE 9000
