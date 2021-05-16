FROM ubuntu:latest

RUN apt-get update && apt-get install -y && apt-get install openssh-server -y
ADD ./sshd_config /etc/ssh/sshd_config

RUN useradd -rm -d /home/admin -s /bin/bash -g root -G sudo -u 1000 admin
RUN useradd -rm -d /home/vliadmin -s /bin/bash -g root -G sudo -u 1001 vliadmin
RUN /usr/bin/echo -e "secur4u\nsecur4u"| /usr/bin/passwd admin
RUN /usr/bin/echo -e "kaviza123\nkaviza123"| /usr/bin/passwd vliadmin
RUN /usr/bin/echo -e "huawei123\nhuawei123"| /usr/bin/passwd root
RUN service ssh restart

EXPOSE 22
CMD ["/usr/sbin/sshd", "-D", "-e"]
