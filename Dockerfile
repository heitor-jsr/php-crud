# Use the official PHP 8.1.2 image from Docker Hub
FROM php:8.1.2-apache

# Install PHP extensions and other dependencies you may need
RUN docker-php-ext-install mysqli pdo pdo_mysql
