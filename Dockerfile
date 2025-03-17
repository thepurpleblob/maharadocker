FROM composer:lts AS thirdpartybuild
ADD ./app/mahara /app
WORKDIR /app
RUN composer update
RUN make initcomposer

FROM node:lts AS gulpstuff
COPY --from=thirdpartybuild /app /app
RUN npm install -g gulp-cli
RUN npm cache clean -f
RUN npm install -g n
RUN npm rebuild node-sass
WORKDIR /app
RUN npm install
RUN gulp css

FROM shinsenter/phpfpm-apache:php8.2 AS web
COPY --from=gulpstuff /app/ /var/www/html
COPY ./mahara-php.ini /usr/local/etc/php/conf.d
COPY ./config.php /var/www/html/htdocs
