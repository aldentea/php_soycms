FROM php:apache
LABEL maintainer="aldentea"

WORKDIR /var/www
COPY ./httpd/conf/sites-available/010-soycms.conf /etc/apache2/sites-available
RUN docker-php-ext-install pdo_mysql && \
    sed -e "s/;extension=pdo_mysql/extension=pdo_mysql/" /usr/local/etc/php/php.ini-production > /usr/local/etc/php/php.ini
RUN mkdir soy && \
    apt update && \
    apt install -y zip mariadb-client && \
    curl -L -o /tmp/soycms.zip https://github.com/inunosinsi/soycms/raw/master/package/soycms/soycms_3.2.1.7_mysql.zip && \
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

