# Getting started

## Installation

To develop the project you need to install

-   php
-   composer
-   mysql-server (mysql_secure_installation)
-   php-mysql

## Setup

All commands need to perform in project directory console:

Install dependencies via composer: `composer install`

Run `cp .env.example .env`

Set application key: `php artisan key:generate`

Run: `php artisan storage:link`

Create database and fill .env file with you own credentials.

```bash
sudo mysql
CREATE DATABASE laravel;
USE laravel;
exit
```

[After that](https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-18-04) login with a new password:

```bash
mysql -u root -p
```

Perform migrations: `php artisan migrate`

Perform seeders: `php artisan db:seed `

To start development server: `php artisan serve` or `php -S localhost:8000 -t public/`

[To update .env variables run](https://dev.to/kenfai/laravel-artisan-cache-commands-explained-41e1):

```
php artisan config:cache
php artisan optimize:clear
```


