FROM alpine:latest 

RUN apk update && apk add vsftpd

RUN addgroup -g 33 ftpuser \
    && adduser -D -u 33 -G ftpuser -h /home/ftpuser -s /bin/sh ftpuser \
    && echo "ftpuser:ftppassword" | chpasswd 

COPY ../vsftpd/vsftpd.conf /etc/vsftpd/vsftpd.conf

CMD ["/usr/sbin/vsftpd", "/etc/vsftpd/vsftpd.conf"]
