## 1. create .env file and check vars
```shell
cp .env.example .env
```

## 2. install composer dependencies
### a. docker
```shell
docker run --rm --interactive --tty -v $(pwd):/app composer install
sudo chown -R $USER:$USER vendor
sail up -d
```

## b. local\prod (assuming db created and .env vars are set)
```shell
composer install
```


#
if local\prod remove sail from commands
## 3. run migrations
```shell
sail artisan key:generate
sail artisan migrate
```

## 4. build frontend
```shell
npm install
npm run dev
```
