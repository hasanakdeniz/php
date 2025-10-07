FROM nginx:alpine
RUN apk add --no-cache shadow && \
    usermod -u 33 nginx && \
    groupmod -g 33 nginx

USER root
RUN chown -R 33:33 /var/www/html/ \
    && chmod -R 755 /var/www/html/
USER 33
