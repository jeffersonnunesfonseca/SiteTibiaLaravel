FROM ambientum/php:7.1-caddy AS app-laravel
COPY . /var/www/app

RUN sudo composer install 
RUN sudo chmod -R 775 /var/www/app
RUN sudo chown -R ambientum:ambientum /var/www/app