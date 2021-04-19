FROM php:8.0-apache

ADD ./www /var/www/html
ADD .htpasswd1 /var/www/.htpasswd

RUN sed  -i '/# Global configuration/a \ ServerName 127.0.0.1' /etc/apache2/apache2.conf
RUN sed  -i '/ServerAdmin webmaster@localhost/a \ ServerName 127.0.0.1:443' /etc/apache2/sites-available/default-ssl.conf

RUN mkdir /etc/apache2/ssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:4096 -keyout /etc/apache2/ssl/server.key -subj "/C=DK/ST=South Denmark/O=TestLab/CN=127.0.0.1" -out /etc/apache2/ssl/server.crt
RUN chmod 400 /etc/apache2/ssl/server.key
RUN chmod 444 /etc/apache2/ssl/server.crt

RUN sed -i 's#SSLCertificateFile\s*/etc/ssl/certs/ssl-cert-snakeoil.pem#SSLCertificateFile /etc/apache2/ssl/server.crt#' /etc/apache2/sites-available/default-ssl.conf
RUN sed -i 's#SSLCertificateKeyFile\s*/etc/ssl/private/ssl-cert-snakeoil.key#SSLCertificateKeyFile /etc/apache2/ssl/server.key#' /etc/apache2/sites-available/default-ssl.conf

RUN chown -R www-data:www-data /var/www

RUN a2enmod ssl
RUN a2ensite default-ssl

EXPOSE 443
