FROM nginx:alpine
RUN apk add --no-cache shadow && \
    usermod -u 33 nginx && \
    groupmod -g 33 nginx
