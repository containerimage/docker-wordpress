FROM quicksetup/xampp

MAINTAINER Markus Endres<arbeit (at) markus-endres (dot) net>

ENV DEBIAN_FRONTEND noninteractive

RUN mkdir /opt/lampp/htdocs/wordpress

# Todo: Move To Base Image
#RUN apt-get install -y -q wget

RUN curl -o wordpress-4.9.8.tar.gz https://wordpress.org/wordpress-4.9.8.tar.gz
#RUN wget https://wordpress.org/wordpress-4.9.8.tar.gz
RUN cp wordpress-4.9.8.tar.gz /opt/lampp/htdocs/wordpress
RUN tar -xvzf /opt/lampp/htdocs/wordpress/wordpress-4.9.8.tar.gz -C /opt/lampp/htdocs/wordpress