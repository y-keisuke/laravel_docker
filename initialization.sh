#!/bin/sh

# laravelのパーミッションエラーを回避
docker-compose exec app bash -c "chmod -R 777 storage/ bootstrap/cache/"

# DBに初期データを作成
docker-compose exec db bash -c "chmod 0755 /docker-entrypoint-initdb.d/init-database.sh"
docker-compose exec db bash -c "./docker-entrypoint-initdb.d/init-database.sh"
