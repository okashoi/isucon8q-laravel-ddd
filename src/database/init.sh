#!/bin/bash

ROOT_DIR=$(cd $(dirname $0)/..; pwd)
DB_DIR="$ROOT_DIR/database"
export MYSQL_PWD=isucon

mysql -hdatabase -uisucon -e "DROP DATABASE IF EXISTS torb; CREATE DATABASE torb;"
mysql -hdatabase -uisucon torb < "$DB_DIR/schema.sql"

mysql -hdatabase -uisucon torb -e 'ALTER TABLE reservations DROP KEY event_id_and_sheet_id_idx'
gzip -dc "$DB_DIR/isucon8q-initial-dataset.sql.gz" | mysql -hdatabase -uisucon torb
mysql -hdatabase -uisucon torb -e 'ALTER TABLE reservations ADD KEY event_id_and_sheet_id_idx (event_id, sheet_id)'
