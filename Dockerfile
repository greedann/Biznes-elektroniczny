FROM prestashop/prestashop:1.7.8

# generate self-signed certificate

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/localhost.key -out /etc/ssl/certs/localhost.crt -subj "/C=PL/ST=Pomerania/L=Gdansk/O=PG/OU=./CN=localhost"

# add certificate to trusted

RUN cp /etc/ssl/certs/localhost.crt /usr/local/share/ca-certificates/

RUN update-ca-certificates

RUN rm /etc/apache2/sites-available/000-default.conf

COPY ./docker/ssl/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod ssl

RUN service apache2 restart