FROM quicksetup/xampp

MAINTAINER Markus Endres<arbeit (at) markus-endres (dot) net>

ENV DEBIAN_FRONTEND noninteractive

#RUN mkdir /opt/lampp/htdocs/

# Todo: Move To Base Image
#RUN apt-get install -y -q wget

RUN curl -o wordpress-4.9.8.tar.gz https://wordpress.org/wordpress-4.9.8.tar.gz
#RUN wget https://wordpress.org/wordpress-4.9.8.tar.gz
RUN cp wordpress-4.9.8.tar.gz /opt/lampp/htdocs/
RUN tar -xvzf /opt/lampp/htdocs/wordpress-4.9.8.tar.gz -C /opt/lampp/htdocs/
#COPY wp-config.php /opt/lampp/htdocs/wordpress/
RUN chmod 777 /opt/lampp/htdocs/wordpress/ -R
#TODO Datenbank wordpress anlegen und sampleconfiguration anpassen mit user:'root' pw:'' datenbank 'wordpress' 