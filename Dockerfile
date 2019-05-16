FROM alpine
ADD inc /app/inc
ADD www /app/www
CMD cp -vr /app/* /var/app/
