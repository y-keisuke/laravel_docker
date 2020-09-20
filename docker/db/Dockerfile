FROM mysql:8.0

RUN mkdir /var/log/mysql
RUN chown mysql:mysql /var/log/mysql
RUN touch /etc/hosts.allow && \
    echo "mysqld: ALL: allow" > /etc/hosts.allow