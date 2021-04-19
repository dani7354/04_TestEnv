FROM php:7.3-apache

ADD ./www /var/www/html
ADD ./htpasswd/.htpasswd0 /var/www/.htpasswd
EXPOSE 80

RUN chown -R www-data:www-data /var/www
