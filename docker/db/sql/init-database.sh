#!/usr/bin/env bash

# テーブルを作成する
mysql -u docker -pdocker laravel_docker < "/docker-entrypoint-initdb.d/create-table.sql"
# レコードを作成する
mysql -u docker -pdocker laravel_docker < "/docker-entrypoint-initdb.d/insert-testdata.sql"
