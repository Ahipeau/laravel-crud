# CRUD LARAVEL 5.8 AVEC SQLITE

<img src="https://camo.githubusercontent.com/5ceadc94fd40688144b193fd8ece2b805d79ca9b/68747470733a2f2f6c61726176656c2e636f6d2f6173736574732f696d672f636f6d706f6e656e74732f6c6f676f2d6c61726176656c2e737667" data-canonical-src="https://laravel.com/assets/img/components/logo-laravel.svg" style="max-width:100%;">
Ce tutoriel est créé pour illustrer l'opération de base CRUD (Créer, Lire, Mettre à jour, Supprimer) à l'aide de SQLite avec Laravel 5.8. 
Run 
php artisan serve

Si vous souhaitez réaliser le meme petit projet vous pourriez suivre mes indications ci-dessous

## ETAPE 1: Installer laravel 5.8
Utiliser la commande suivante après avoir installer composer sur votre ordinateur: 

composer create-project --prefer-dist laravel/laravel crud-laravel

## ETAPE 2: Créer et configurer la base de données
Créeons la base données database.sqlite au niveau du dossier "database"
Ouvrez le fichier .env dans le projet Laravel et ajoutez les informations d'identification de la base de données comme indiqué ci-dessous.

.env
DB_CONNECTION=sqlite
 
## ETAPE 3: Creation d'une nouvelle table dans la base de données
Utiliser la commande suivante : 

php artisan make:migration create_articles_table
Configurer vos champs dans votre nouvelle migration 

## ETAPE 4: Création du modele et du controller
Utiliser la commande: 
php artisan make:controller ArticlesController -r -m Article

