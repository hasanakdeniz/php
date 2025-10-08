FROM atmoz/sftp:alpine

RUN chown -R 1000:1000 /upload && \
    chmod 755 /upload
