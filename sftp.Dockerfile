#!/bin/sh

FROM atmoz/sftp:latest

RUN chown 1001:1001 /home/sftpuser/ftp/upload
