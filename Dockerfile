# Dockerfile
FROM php:8.2-apache


RUN a2enmod rewrite

ADD ./src/ /var/www/html