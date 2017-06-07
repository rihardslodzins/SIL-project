FROM php:5.6-apache
MAINTAINER Eduardo Malherbi <emalherbi@gmail.com>

# mysql
RUN docker-php-ext-install mysql
RUN docker-php-ext-install pdo_mysql

# rewrite
RUN a2enmod rewrite

# Edit 000-default.conf to change apache site settings.
ADD 000-default.conf /etc/apache2/sites-available/

EXPOSE 80
EXPOSE 443

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
