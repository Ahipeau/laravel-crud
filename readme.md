# CRUD LARAVEL 5.8 AVEC SQLITE

## ETAPE 1: Installer laravel 5.8
Utiliser la commande suivante après avoir installer composer sur votre ordinateur: 
composer create-project --prefer-dist laravel/laravel crud-laravel

## ETAPE 2: Créer et configurer la base de données
Créeons la base données database.sqlite au niveau du dossier "database"
Ouvrez le fichier .env dans le projet Laravel et ajoutez les informations d'identification de la base de données comme indiqué ci-dessous.

.env
DB_CONNECTION=sqlite
 
## ETAPE 3: Creation d'une nouvelle table dans la base de données
Utiliser la commande suivante : php artisan make:migration create_articles_table
