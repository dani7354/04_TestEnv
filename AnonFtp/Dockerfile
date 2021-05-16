FROM ubuntu:latest

RUN apt-get update && apt-get install -y && apt-get install proftpd -y 
ADD ./proftpd.conf /etc/proftpd/proftpd.conf

RUN service proftpd restart

EXPOSE 21
CMD ["/usr/sbin/proftpd","-n", "-d 0"]
