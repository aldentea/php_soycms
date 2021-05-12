FROM php:8.0-apache
LABEL maintainer="aldentea"

WORKDIR /var/www
COPY ./httpd/conf/sites-available/010-soycms.conf /etc/apache2/sites-available
RUN ln -s /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini && \
    docker-php-ext-install pdo_mysql
RUN mkdir soy && \
    apt-get update && \
    apt-get install -y zip && \
    curl -L -o /tmp/soycms.zip https://github.com/aldentea/soycms/releases/download/3.1.3.15/soycms_3.1.3.15_mysql.zip && \
    unzip -d soy /tmp/soycms.zip && \
    chown www-data . && \
    chown www-data soy/admin/cache && \
    chown www-data soy/soycms/cache && \
    chown www-data soy/common/db
RUN a2ensite 010-soycms.conf && \
    a2dissite 000-default.conf && \
    a2enmod rewrite


EXPOSE 80
CMD ["apache2-foreground"]

