Projet exemple de site avec laravel 8
Action sur Base products / vues sur users avec table de jonction sur Roles / Assignement des rôles par formulaire / gestion des Middleware pour verrouillage des accès sur parties de site/ création du fichier seed pour pouvoir démarrer.

Projet qui rassemble les besoins vitaux pour la gestion de projet simple avec Laravel;



Aide à l'installation

Installer Xampp

cloner le projet dans
C:\xampp\htdocs\

Lancer votre terminal dans le fichier php-laravel-crud et taper “code .”

lancer Xampp et start Apache, MySQL et FileZilla

dans visual studio faire les action suivante à l'aide du terminal ou des fichier :


'lien https://cynoteck.com/blog-post/installing-laravel-8-on-windows-10-xampp/'

install ui composer avec terminal :
voir si composer est installer avec "composer -V"
sinon l'installer

activer les extensions “extension=pdo_mysql” et “extension=fileinfo” and le fichier php.ini
en décommentant



composer global require “laravel/installer”
composer update



créer base de donnée dans php my admin exe : "php-laravel-crud"
controller la correspondance dans .env :
DB_DATABASE=php-laravel-crud

run :  
php artisan migrate
php artisan db:seed --class=RoleSeeder
php artisan db:seed --class=UserSeeder


lancement du projet
php artisan serve
