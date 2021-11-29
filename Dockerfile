FROM wordpress:latest
LABEL maintainer="kamelj@outlook.com"
COPY wordpress/ /var/www/html/
VOLUME ./wp/wp-content:/var/www/html/wp-content

EXPOSE 80