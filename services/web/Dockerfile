FROM php:7.2-apache

RUN apt-get update &&\
    apt-get install -y mysql-client libicu-dev zlib1g-dev zip &&\
    docker-php-ext-install mbstring intl pdo_mysql zip

WORKDIR /var/www/app

COPY ./torb.conf /etc/apache2/sites-available/torb.conf
RUN a2ensite torb.conf &&\
    a2dissite 000-default.conf
