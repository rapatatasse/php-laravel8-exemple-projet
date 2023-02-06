Projet exemple de site avec laravel 8
Action sur Base products / vues sur users avec table de jonction sur Roles / Assignement des rôles par formulaire / gestion des Middleware pour verrouillage des accès sur parties de site/ création du fichier seed pour pouvoir démarrer.

Projet qui rassemble les besoins vitaux pour la gestion de projet simple avec Laravel;



Aide à l'installation

Installer Xampp

cloner le projet dans
C:\xampp\htdocs\

Lancer votre terminal (windows PowerShell garder le même de préférence) dans le fichier php-laravel-crud et taper “code .”

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
controller la correspondance dans .env (transformer le .env.exemple en .env):
DB_DATABASE=php-laravel-crud

run :  
php artisan migrate
php artisan db:seed --class=RoleSeeder
php artisan db:seed --class=UserSeeder


lancement du projet
php artisan serve


cours laravel 8 
https://laravel.sillo.org/cours-laravel-8-les-donnees-migrations-et-modeles/#:~:text=Laravel%20permet%20de%20g%C3%A9rer%20les,Postgres%2C%20SQLite%20et%20SQL%20Server.





Envoyer sur heroku
https://devcenter.heroku.com/articles/getting-started-with-laravel

creation de la clef :
php artisan key:generate --show
copie de  la clef sur artisan : 
heroku config:set APP_KEY=



creation de la base de donnée :


https://www.youtube.com/watch?v=EyEn5gREn_U
https://www.doabledanny.com/Deploy-PHP-And-MySQL-to-Heroku

heroku addons:create heroku-mysql:?????? --app savapp
heroku addons:create heroku-postgresql:????? --app savapp


Configurer le database.php pour mettre les valiable de la base de données et mettre la base de donnée en utf8.


heroku run php artisan migrate	--app savapp

heroku pg:info  (pour voir le nom de la basez en ligne le nom doit être identique dur database.php)

si erreure :
heroku logs -remote heroku -tail




si lors du lancement du site  :
Not Found
The requested URL was not found on this server.

ajouter dans composer.json  ceci :
        "post-install-cmd": [
            "php artisan clear-compiled",
            "chmod -R 777 public/"
        ],
