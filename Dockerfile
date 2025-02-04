# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory
WORKDIR /var/www/html

# Copy the current directory contents into the container
COPY . .

# Install any needed dependencies
RUN docker-php-ext-install pdo pdo_mysql

# Make sure the public folder is served in Laravel apps
RUN ln -s /var/www/html/public /var/www/html/public_html

# Expose port 80 for the web server
EXPOSE 80

# Start Apache service
CMD ["apache2-foreground"]
