FROM php:8.1

RUN mkdir /app
RUN docker-php-ext-install mysqli pdo pdo_mysql \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug 

COPY . /app

WORKDIR /app

CMD php -S 0.0.0.0:8989 -t /app
