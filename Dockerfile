FROM php:5.6-apache
RUN rm -rf /var/www/html/*
COPY src/ /var/www/html/
