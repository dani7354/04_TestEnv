FROM php:8.0-apache

RUN sed  -i '/# Global configuration/a \ ServerName 127.0.0.1' /etc/apache2/apache2.conf
ADD ./www /var/www/html
ADD ./htpasswd/.htpasswd0 /var/www/.htpasswd

RUN chown -R www-data:www-data /var/www

EXPOSE 80
