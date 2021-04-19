FROM php:8.0-apache

ADD ./www /var/www/html

RUN mkdir /etc/apache2/ssl
RUN chown -R www-data:www-data /var/www

RUN a2enmod ssl
RUN a2ensite default-ssl
EXPOSE 443
