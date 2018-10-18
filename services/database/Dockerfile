FROM mysql:5.7

RUN apt-get update && \
    apt-get install -y locales curl && \
    rm -rf /var/lib/apt/lists/* && \
    echo "ja_JP.UTF-8 UTF-8" > /etc/locale.gen && \
    locale-gen ja_JP.UTF-8

ENV LC_ALL ja_JP.UTF-8

COPY ./my.cnf /etc/mysql/conf.d/my.cnf
COPY ./0-schema.sql /docker-entrypoint-initdb.d
COPY ./1-isucon8q-initial-dataset.sql.gz /docker-entrypoint-initdb.d
