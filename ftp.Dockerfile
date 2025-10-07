FROM alpine/git:latest as base
RUN apk update && apk add vsftpd

RUN mkdir -p /home/ftpuser/ \
    && adduser -D -h /home/ftpuser -s /bin/sh ftpuser \
    && echo "ftpuser:ftppassword" | chpasswd 

COPY vsftpd.conf /etc/vsftpd/vsftpd.conf

CMD ["/usr/sbin/vsftpd", "/etc/vsftpd/vsftpd.conf"]
