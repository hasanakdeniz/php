FROM atmoz/sftp:alpine

ARG SFTP_USER
ARG SFTP_UID=1000
ARG SFTP_GID=1000

RUN addgroup -g ${SFTP_GID} ${SFTP_USER} && \
    adduser -D -u ${SFTP_UID} -G ${SFTP_USER} -h /home/${SFTP_USER} ${SFTP_USER} && \
    mkdir -p /home/${SFTP_USER}/upload && \
    chown -R ${SFTP_USER}:${SFTP_USER} /home/${SFTP_USER} && \
    chmod 755 /home/${SFTP_USER}/upload
