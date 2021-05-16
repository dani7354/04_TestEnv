FROM ubuntu:latest

RUN apt-get update && apt-get install -y && apt-get install openssh-server -y
RUN useradd -rm -d /home/ubuntu -s /bin/bash -g root -G sudo -u 1000 admin
RUN /usr/bin/echo -e "'secur4u'\n'secur4u'"| /usr/bin/passwd admin
RUN service ssh start

EXPOSE 22
CMD ["/usr/sbin/sshd", "-D"] 
