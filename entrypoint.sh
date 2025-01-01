#!/bin/sh

# Run composer install to ensure dependencies are up to date
echo "Running composer install..."
composer install --no-interaction --prefer-dist

# Wait for MySQL to be ready
echo "Waiting for MySQL to be ready..."
until nc -z -v -w30 mysql 3306
do
  echo "Waiting for MySQL database connection..."
  sleep 1
done

# Run migrations to ensure the database is up-to-date
echo "Running migrations..."
php /var/www/html/artisan migrate --force
php /var/www/html/artisan CreateUser

# Execute the PHP-FPM server (or any command you want to run by default)
echo "Starting PHP-FPM..."
exec php-fpm