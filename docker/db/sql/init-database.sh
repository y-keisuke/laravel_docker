#!/usr/bin/env bash

mysql -u docker -pdocker laravel_docker < "/docker-entrypoint-initdb.d/create-table.sql"
mysql -u docker -pdocker laravel_docker < "/docker-entrypoint-initdb.d/insert-testdata.sql"
