# Docker
### mount docker
docker-compose up -d nginx phpmyadmin mysql

### worksacpe
docker-compose exec workspace bash

# Scaffold
### Create
artisan infyom:scaffold Patient_spapd --fieldsFile=resources/json/Patient_spapd.json
    
### Roolback
php artisan infyom:rollback Patient_spapd scaffold

# Estructura server
/laravel
/laradock

### para que mueva los .env y los archivos ocultos
shopt -s dotglob

### mover
cd /var/www
mkdir laravel
mv /var/www/* /var/www/laravel
mv /var/www/laravel/laradock /var/www

### permisos
chown -R docker:docker /var/www/laravel
chown -R root:root /var/www/laradock

### Point to the path of your applications code on your host
APP_CODE_PATH_HOST=../laravel


