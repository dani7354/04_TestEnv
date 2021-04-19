FROM php:7.3-apache

ADD ./www /var/www/html
ADD .htpasswd1 /var/www/.htpasswd
#ADD ./default-ssl.conf /etc/apache2/sites-available/default-ssl.conf

RUN mkdir /etc/apache2/ssl
RUN chown -R www-data:www-data /var/www

RUN a2enmod ssl
RUN a2ensite default-ssl
EXPOSE 443

