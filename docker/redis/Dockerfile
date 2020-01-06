FROM redis:4.0.14-alpine
COPY redis.conf /usr/local/etc/redis/redis.conf
CMD [ "redis-server", "/usr/local/etc/redis/redis.conf" ]
# https://raw.githubusercontent.com/antirez/redis/4.0/redis.conf 注意配置文件版本和 docker 中的redis版本一致