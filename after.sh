#!/bin/bash
# Ожидание готовности базы данных
#while ! mysqladmin ping -h"db" --silent; do
#    sleep 1
#done

# Выполнение миграций и других команд
php artisan key:generate
php artisan config:cache
php artisan migrate --seed