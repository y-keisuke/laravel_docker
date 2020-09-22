FROM mysql:8.0

# ログの出力先を作成して、パーミッションを変更
RUN mkdir /var/log/mysql
RUN chown mysql:mysql /var/log/mysql
# Lost connection to MySQL ~ というエラーが出たのでその対応
RUN touch /etc/hosts.allow && \
    echo "mysqld: ALL: allow" > /etc/hosts.allow