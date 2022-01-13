FROM php:7.3-apache

RUN apt-get update && apt-get install -y libicu-dev libpq-dev git zip unzip libzip-dev
RUN rm -r /var/lib/apt/lists/* && docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd
RUN docker-php-ext-install intl mbstring pcntl pdo_mysql pdo_pgsql pgsql zip opcache
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

ENV APP_HOME /var/www/html

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data
RUN sed -i -e "s/html/html\/public/g" /etc/apache2/sites-enabled/000-default.conf
RUN a2enmod rewrite

COPY . $APP_HOME

RUN composer install --no-interaction
RUN chown -R www-data:www-data $APP_HOME