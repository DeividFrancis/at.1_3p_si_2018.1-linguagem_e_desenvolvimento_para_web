FROM php:7.0-apache
ADD app /var/www/html
EXPOSE 80

ENTRYPOINT /usr/sbin/apache2ctl -D FOREGROUND
