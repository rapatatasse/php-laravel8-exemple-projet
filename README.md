install ui composer :

composer require laravel/ui

php artisan migrate

créer base de donnée dans php my admin exe : "php-laravel-crud"
controller la correspondance dnas .env :
DB_DATABASE=php-laravel-crud

run :  
php artisan db:seed --class=RoleSeeder
php artisan db:seed --class=UserSeeder

pour tester action dans controler :
        dump('Nous ici');
        die();