FROM atmoz/sftp:alpine

RUN mkdir -p /home/${SFTP_USER}/upload && \
    addgroup -g 1000 ${SFTP_USER} && \
    adduser -D -u 1000 -G ${SFTP_USER} -h /home/${SFTP_USER} ${SFTP_USER} && \
    chown -R ${SFTP_USER}:${SFTP_USER} /home/${SFTP_USER} && \
    chmod -R 755 /home/${SFTP_USER} && \
    chmod 755 /home/${SFTP_USER}/upload
