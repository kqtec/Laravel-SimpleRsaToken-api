# Laravel-SimpleRsaToken-api
App 服务端 轻量级 api 

Requirements
------------
 - PHP >= 7.0.0
 - Laravel >= 5.5.0
 - Fileinfo PHP Extension

Installation
------------

First, install laravel 5.5, and make sure that the database connection settings are correct.

```
composer require kqtec/laravel-simple-rsa-token-api
```

Then run these commands to publish assets and config：

```
php artisan vendor:publish --provider="Kqtec\SimpleRsaTokenApi\ApiServiceProvider"
```

At last run following command to finish install.
```
php artisan api:install
```
