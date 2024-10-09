FROM php:7.4-fpm

RUN docker-php-ext-install pdo pdo_mysql

COPY index.php /var/www/html

WORKDIR /var/www/html

RUN chown -R www-data:www-data /var/www/html

EXPOSE 9000

CMD ["php-fpm"]
