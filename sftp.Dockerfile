FROM atmoz/sftp:alpine

RUN mkdir -p /home/upload && \
    chown -R 1000:1000 /home && \
    chmod 755 /home/upload
