FROM node:8.12

ARG USER_ID
ARG GROUP_ID

WORKDIR /var/www/app

RUN groupadd -g $GROUP_ID -o developer &&\
    useradd -m developer -u $USER_ID -g $GROUP_ID

USER developer
