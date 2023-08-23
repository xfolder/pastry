## LOCAL ENVIRONMENT (docker with laravel sail)

### 1. create .env file and check vars\settings
```shell
cp .env.example .env
```

```
set DB_HOST = mysql
set DB_PORT = 3306
set DB_USERNAME = sail
set DB_PASSWORD = password
```

### 2. install composer dependencies
```shell
docker run --rm --interactive --tty -v $(pwd):/app composer install
sudo chown -R $USER:$USER vendor
sail up -d
```
### 3. run artisan commands
```shell
sail artisan key:generate
sail artisan migrate:fresh
sail artisan storage:link
```
### 4. build frontend
```shell
npm install
npm run dev
```

## PRODUCTION ENVIRONMENT
### 1. create .env file from .env.example and check vars\settings
### 2. create database\user 
### 3. install composer dependencies
```shell
composer install
```
### 4. run artisan commands
```shell
php artisan key:generate
php artisan migrate:fresh
php artisan storage:link
```
### 5. build frontend
```shell
npm install
npm run build
```

## ADMIN AREA
admin url = ${APP_URL}/admin

built-in admin user:
<ol>
    <li>email: admin@pastry.local password: password</li>
    <li>email: luana@pastry.local password: password</li>
    <li>email: maria@pastry.local password: password</li>
</ol>
