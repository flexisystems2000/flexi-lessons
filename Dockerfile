FROM php:8.3-apache

# Enable Apache URL rewriting.
RUN a2enmod rewrite

# Set the website directory.
WORKDIR /var/www/html

# Copy the existing website files into the container.
COPY . /var/www/html/

# Set appropriate file ownership.
RUN chown -R www-data:www-data /var/www/html

# Configure Apache to use Render's assigned port.
CMD ["sh", "-c", "PORT=${PORT:-10000}; sed -i \"s/^Listen 80/Listen ${PORT}/\" /etc/apache2/ports.conf && sed -i \"s/:80>/:${PORT}>/\" /etc/apache2/sites-available/000-default.conf && exec apache2-foreground"]
