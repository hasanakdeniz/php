FROM atmoz/sftp:alpine

RUN mkdir -p /home/selam/sftp_user/upload && \
    chmod 755 /home/selam/sftp_user/upload
