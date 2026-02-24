FROM php:8.2-apache

# Copy project files to Apache directory
COPY . /var/www/html/

# Enable Apache rewrite module
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80