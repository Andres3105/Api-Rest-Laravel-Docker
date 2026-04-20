FROM php:8.4-apache 
 
RUN apt-get update && apt-get install -y \ 
    git curl libpng-dev libonig-dev libxml2-dev zip unzip libzip-dev \ 
    && docker-php-ext-install pdo_mysql mysqli zip bcmath mbstring exif pcntl \ 
    && apt-get clean && rm -rf /var/lib/apt/lists/* 
 
RUN a2enmod rewrite 
 
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer 
 
WORKDIR /var/www/html 
 
EXPOSE 80 
 
CMD ["apache2-foreground"]