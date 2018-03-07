FROM php:7.0-apache
EXPOSE 80

#Habilita o uso do .htaccess
RUN a2enmod rewrite
