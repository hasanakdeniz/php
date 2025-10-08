FROM atmoz/sftp:alpine

RUN mkdir -p /home/${SFTP_USER}/upload && \
    chown -R 1001:1001 /home/${SFTP_USER} && \
    chmod 755 /home/${SFTP_USER}/upload
