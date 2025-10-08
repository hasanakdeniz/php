FROM atmoz/sftp:alpine

RUN mkdir -p /home/sftp_user/upload && \
    chmod 755 /home/sftp_user/upload
