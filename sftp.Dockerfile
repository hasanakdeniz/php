FROM atmoz/sftp:alpine

RUN mkdir -p /home/upload && \
    chown -R 1001:1001 /home && \
    chmod 755 /home/upload
