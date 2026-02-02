FROM php:7.4-apache

# Enable mod_rewrite
RUN a2enmod rewrite

RUN rm -f /var/log/apache2/access.log /var/log/apache2/error.log && \
    touch /var/log/apache2/access.log /var/log/apache2/error.log && \
    chown root:adm /var/log/apache2/access.log /var/log/apache2/error.log && \
    chmod 640 /var/log/apache2/access.log /var/log/apache2/error.log

RUN usermod -a -G adm www-data

# Set permissions for web directory
RUN chown -R www-data:www-data /var/www/html

# Expose port
EXPOSE 80

CMD ["apache2-foreground"]