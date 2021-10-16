FROM php:apache

# Load site files
COPY ./src /var/www/html

# Update domain variable to use `localhost`
RUN sed -i 's;https:\/\/nurio.me;http:\/\/localhost;g' /var/www/html/index.php

# Enable apache2 mod to allow url rewrites
RUN a2enmod rewrite