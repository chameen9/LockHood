## ℹ️ Application Info 

- Laravel Version : 9.45.1
- PHP Version : 8.1.6
- Composer Version : 2.5.1
## 🛠️ Database Script 

Use dbName = lockhood.sql file to create tables.<br>
<br>
:warning: __NOTE__<br>
> database name should named as 'lockhood'.<br>
Otherwise you have to change the 'DB_DATABASE=loockhood' to your database name in enviroment(.env) file.

## 🛠️ MySQL Instalation

- Install [XAMPP Control Panel](https://www.apachefriends.org/download.html). with apache and MySQL server.

## 🛠️ Packages

- [laravel-dompdf](https://packagist.org/packages/barryvdh/laravel-dompdf)
```
    composer require barryvdh/laravel-dompdf
```

- [maatwebsite/excel](https://packagist.org/packages/maatwebsite/excel)
```
    composer require maatwebsite/excel
```
    
## 🔥 Run Command 
```
    php artisan serve
```