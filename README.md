Projet exemple de site avec laravel 8
Action sur Base products / vues sur users avec table de jonction sur Roles / Assignement des rôles par formulaire / gestion des Middleware pour verrouillage des accès sur parties de site/ création du fichier seed pour pouvoir démarrer.

Projet qui rassemble les besoins vitaux pour la gestion de projet simple avec Laravel;



####### Aide à l'installation ###########

1/ Installation logiciel################################################

Installer Visual sutio code : https://code.visualstudio.com/download
Installer Xampp : https://www.apachefriends.org/fr/download.html version de php 8.0 ou 8.1 (xamp va installer la derniere version de php)

2/ Cloner le projet#####################################################

Apres l'installation de xamp un fichier xamp a la racine de c: est créé
Pour qu'un projet sous php puisse tourner avec sa base sql il devra se trouver dans :
C:\xampp\htdocs\
une fois dans ce dossier clique droit et cliquer sur ouvrir dans le terminal.
Dans le terminal cloner le projet en copier collant cettte phrase :

    git clone https://github.com/rapatatasse/php-laravel-project-crud.git

Une fichier php-laravel-project-crud va apparaitre il s'agit de l'application.
dans le termnal taper ceci pour rentrer dans le fichier :
    cd .\php-laravel-project-crud\
Puis pour lancer Visual stodio code a partir de ce répertoire taper dans le termnal :
    code .

lancer Xampp (clique bouton windows et taper lancer puis 
Dans xamp cliquer sur star pour 
Apache et My sql

3/Install composer#######################################################

Info doc: 'lien https://cynoteck.com/blog-post/installing-laravel-8-on-windows-10-xampp/'

install ui composer :
voir si composer est installer avec "composer -V"
    sinon l'installer https://getcomposer.org/download/
    info pas a pas ici :https://www.laratutorials.com/install-composer-windows-10-xampp/    
    projet testé avec Composer version 2.4.2 

3/Install laravel####################################################### 
dans terminal tapper ceci pour installer laravel et ses dépendance par rapport a votre projet :
    composer global require “laravel/installer”
puis :
    composer update

4/ Création de votre base de donnée####################################

Vous avez besoin de créer manuellement le nom de la base de donnée.
Pour ceci ouvrer xamp et cliquer sur Mysql et bouton Admin ceci vous redirigera sur cette page : http://localhost/phpmyadmin/

créer base de donnée dans php my admin exe : "php-laravel-crud"
    
    
5/Création liaison######################################################

Le projet laravel a besoin de savoir comment ce nomme votre base de donné et ses accès.
C'est le fichier .env qui gére ceci. dans ce projet vous ne trouverez que le .env.exemple car votre .env n'est pas musher sur Git par sécurité car dans ce fichier peuvent être inscrit des informations sécurité délicate comme la liaosn S3 ou Sendgrid...
Copier coller le .env.exemple en .env   

Dans ce fichier juste renommer le nom de votre base de donnée sur cette ligne
DB_DATABASE=php-laravel-crud

6/Création des tables de la base de donné###############################

Les tables ne sont pas a créer dans phpmyAdmin car ceci pose plusieurs problème pour la maintenance, le travail en groupe, la migration en ligne...
C'est artisan (de composer) qui va se charger de ce travail.
Vous avez un fichier database/migration
Celui ci stoke la logique des création des tables et des dépendance, inspirer vous de ces fichier pour créer d'autre table et aussi d'un peit calculateur que j'ai créer ici : https://sites.google.com/view/tpass-bibli/g%C3%A9n%C3%A9rateur-de-code-laravel-php

taper dans le terminal les instruction ci dessous  (si une erreur apparait c'est surement du au fait qu'il ne trouve pas votre base de donnée): 
    php artisan migrate

ceci migre tout les fichiers, après cette instruction dans php MyAdmin vous verrez les tables. 
Mais elle sont vide on va les remplir de quelques donnée avec les seeders la aussi compléter les à votre guise :
    php artisan db:seed --class=RoleSeeder
    php artisan db:seed --class=UserSeeder
Vous remarquerez que l'on lance les role avant les user car un user a besoin d'un role 

info sur les migration : https://laravel.com/docs/9.x/migrations


7/lancement du projet :)  #######################################

Taper dans le terminal :
    php artisan serve
et vous verrez votre application en local : http://localhost:8000/


8/Repérage dans les fichiers ###################################
-----------------pour se repérer dans les fichier laravel -----------------
Votre appli appel en premier les routes :
routes/web.php

La route tappe dans un controlleur 
app/Http/Controllers
Dans le controlleur ont trouve les actions classic index/show/edit/...

Certaine action du controleur a besoin de model pour formateur ou voir les autorisation de modification:
app/Models

Une action d'un contrôlleur retourne une vue :
ressources/views

La structure maitresse des vues est créer par (html/body/footer...):
layouts/app.blade.php












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
