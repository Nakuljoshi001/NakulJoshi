# Use official PHP image as base
FROM php:7.4-apache

# Set the working directory
WORKDIR /var/www/html

# Copy project files to container
COPY . .

# Install any required dependencies
RUN docker-php-ext-install pdo pdo_mysql

# Expose port 80 for web server
EXPOSE 80

# Start the apache server
CMD ["apache2-foreground"]
