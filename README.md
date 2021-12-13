Projet exemple de site sout laravel 8
Action sur Base products / vues sur users avec table de jonction sur Roles / Assignement des rôles par formulaire / gestion des Middleware pour verrouillage des accès sur parties de site/ création du fichier seed pour pourvoir démarrer.

Projet qui rassemble les besoins vitaux pour la gestion de projet simple avec Laravel; 

install ui composer :

composer require laravel/ui

php artisan migrate

créer base de donnée dans php my admin exe : "php-laravel-crud"
controller la correspondance dnas .env :
DB_DATABASE=php-laravel-crud

run :  
php artisan db:seed --class=RoleSeeder
php artisan db:seed --class=UserSeeder

