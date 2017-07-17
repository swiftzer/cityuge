# CityU GE Guide

* use Apache, XAMP, MAMP(Mac)
```
composer install
php artisan key:generate
cp .env-example .env
```

* DB migrations
```
php artisan migrate
php artisan db:seed
```

* Run gulp
```
npm install
gulp watch
```

* Docker (For Mac users)
```
docker-compose up
docker exec -it cityuge bash
php artisan key:generate

cp .env-example .env
```
update you .env files
```
DB_HOST=mysql
DB_DATABASE=cityuge
DB_USERNAME=root
DB_PASSWORD=password
```
