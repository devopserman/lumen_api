# Lumen PHP Framework 5.8

Тестовое задание

Инструкция по распаковке:

Развернуть проект на локалке. Сделать - composer update
Создать базу, настроить подключение к ней в .env файле. 
Выполнить миграции - php artisan migrate
Выполнить консольную команду - php artisan currency_update

Запустить сервер
php -S localhost:8000 -t public

Просмотр списка валют:
http://site.local/
http://site.local/currency/

Просмотр выбранной валюты:
http://site.local/currency/{id}
