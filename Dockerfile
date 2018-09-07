FROM ubuntu:16.04
RUN  apt-get update -y
#para apache
RUN apt-get install apache2 -y
# para php
RUN apt-get install php php7.0-gd -y
RUN apt-get install php libapache2-mod-php php7.0-mcrypt php7.0-mysql -y
RUN rm -rf /var/www/html
COPY --chown=www-data:www-data wordpress/ /var/www/html
COPY --chown=www-data:www-data wp-config.php/ /var/www/html
ENTRYPOINT apache2ctl -D FOREGROUND

