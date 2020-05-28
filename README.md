<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Intructions aux lancements
* composer install
*
* [si composer install ne marche pas faire sudo apt-get --purge remove php-common 
* puis faire sudo apt install php-cli php-mbstring php-xml 
* puis refaire un composer install]
*
* npm install 
* npm install --save rxjs
* Créer le fichier .env a partir du fichier .env.exemple
* Generer des clés avec  php artisan key:generate
 

## Intructions en cours de developpements
* faire run watch pour actualiser le code quand on le modifie
* à chaque fois qu'on ajoute un nouvel element(ex vue) refaire un npm install
* faire un "php artisan migrate:fresh --seed" 
* pour uploader des images il faut lancer la ligne de commande suivante : php artisan storage:link  (cela va creer un dossier storage dans le dossier public, dans ce dossier dossier storage il faudra creer un dossier monDossier )

## Pour l'authentification : 
* Après chaque php artisan migrate:refresh --seed, refaire obligatoirement un php artisan passport:install
* Regarder les seeders pour les codes d'admin et d'utilisateur
