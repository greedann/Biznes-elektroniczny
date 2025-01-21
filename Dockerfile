FROM prestashop/prestashop:1.7.8

# generate self-signed certificate

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/localhost.key -out /etc/ssl/certs/localhost.crt -subj "/C=PL/ST=Pomerania/L=Gdansk/O=PG/OU=./CN=localhost"

# add certificate to trusted

RUN cp /etc/ssl/certs/localhost.crt /usr/local/share/ca-certificates/

RUN update-ca-certificates

RUN rm /etc/apache2/sites-available/000-default.conf

COPY ./docker/ssl/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN rm -rf /var/www/html/*

RUN chmod -R 777 /var/www/html

COPY ./prestashop_src/ /var/www/html/

RUN a2enmod ssl

RUN apt-get update && apt-get install -y libmemcached-dev zlib1g-dev
RUN pecl install memcached
RUN docker-php-ext-enable memcached


