FROM atmoz/sftp:alpine

RUN mkdir -p /home/${SFTP_USER}/upload && \
    chown -R 1000:1000 /home/${SFTP_USER} && \
    chmod 755 /home/${SFTP_USER}/upload
