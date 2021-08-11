FROM ubuntu:16.04
WORKDIR /var/www/html

RUN apt-get update -y && \
    apt-get install apache2 -y
RUN apt-get install php libapache2-mod-php php-curl -y
RUN apt-get install mongodb mongodb-server -y
RUN apt-get install php-mongodb -y
RUN apt-get install nano -y
RUN apt-get install composer -y
RUN echo "extension=mongodb.so" >> /etc/php/7.0/apache2/php.ini
RUN echo "extension=php_curl.dll" >> /etc/php/7.0/apache2/php.ini
RUN echo "extension=php_mongo.dll" >> /etc/php/7.0/apache2/php.ini

CMD ["/usr/sbin/apache2ctl", "-D","FOREGROUND"]
EXPOSE 80