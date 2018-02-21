FROM php:7.0-apache
COPY app /var/www/html
EXPOSE 80

ENTRYPOINT /usr/sbin/apache2ctl -D FOREGROUND