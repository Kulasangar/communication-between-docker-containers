FROM php:7.0-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

#installing 
RUN apt-get update
RUN apt-get install apache2 -y

#making /app as the working directory
WORKDIR /app

# copying the files within the ./dist/ within /var/www/html/
ADD dist /var/www/html/

#copying the api.php inside the /var/www/html
COPY api.php /var/www/html/

#exposing the ports
EXPOSE 8080 80

#copying the run.sh within the /app working directory
COPY ./run.sh /app/

#executing the shell script
#CMD ["./run.sh"]

#executing the following command to start the apache service
CMD ["apachectl", "-D", "FOREGROUND"]

#CMD [ "http-server", "dist" ]