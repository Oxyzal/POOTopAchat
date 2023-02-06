# Apprentissage PHP - POO 

L'objectif de ce projet est de comprendre les bases même de PHP et de sa programmation orienté objet (adieu le procédural).

Le projet doit respecter la structure MVC (Model - View - Controller) de PHP ainsi que posséder un ORM (object-relational mapping) pour accéder à la base de donnée.

Vous êtes libre du choix de la technologies pour le front (css) pas de framework JavaScript.

## Objectifs

Pour se faire, vous allez de voir recréer les pages suivant du site [TopAchat](https://www.topachat.com/accueil/index.php):
- Une page d'accueil regroupant les derniers articles ajoutés au site et les meilleures ventes
- Une page de catégorie de produit 
- La page regroupant tous les produits d'une catégorie
- Une page montrant un produit
- Un système de recherche dans tous les produits disponibles sur le site
- Un système de panier 
- Un sytème de compte client

Pour des objectifs complémentaires:
- Système de stock des produits
- Un Seeder de la votre base de donnée

ATTENTION a bien respecter les nomanclatures de base de données. Toutes vos tables doivent avoir un id propre se nommant ID ainsi que si table avec plusieurs mots, les séparer par un "_", de même pour les tables pivots.

## Structure du projet
```
 - /core (contient tous vos fichiers de fonctionnement de votre application)
  | - App.php (fichier pour le fonctionnement de l'app)
  | - Config.php (fichier de configuration de l'app)
  | - Handler.php (fichier qui gère les requêtes http et renvoie la page d'erreur si problème avec l'erreur)
  | - Session.php (gère la session d'un utilisateur)
  | - Controller.php (base des fichiers controller, donc une classe abstraite qui sera étendu par vos controller)
  | - View.php (fichier qui faire le render des pages)
- /app
  | - /controllers (contient tous vos controllers)
  | - /models (contient tous les modèles de vos tables)
  | - /helpers (contient des classes d'aide de code répétitif dans votre app)
  | - /views (contient tout les pages à render)
- /public 
  | - js (contient tous le JavaScript de votre site)
  | - css (contient tous le style de votre site)
  | - assets (contients vos images ou tout autre éléments statiques à afficher dans le site) 
  | - index.php (fichier qui va load votre projet en chargeant la classe App.php dans votre dossier core)
- composer.json (vous servira à faire votre autoload et mettre toutes les informations de votre projet)
```
ATTENTION interdiction d'installer des dépendances composer ! 

## GIT

Pour s'habituer au bonne pratique, voici comment vous allez devoir contruire vos commits ainsi qui vos branches de développment.

1 - Pour les commits, nous utiliseront ici la nomenclature [Gitmoji](https://gitmoji.dev/). Vos commits devront donc être précédé par un émoji correspondant à votre action (se référer au site de gitmoji), suivi de votre verbe d'action en majuscule et pour finir ce que vous avez fait.

2- Pour vos branches, vous ne devrez pas push directement sur la main mais uniquement sur des branches de développement qui suivront la nomenclature suivante:
  - dev/fonctionnalité (pour vos branches de développement "classique")
  - fix/problème (pour vos branches de correctif)

Pour mettre votre code d'une branche de développement vous devrez faire une PR (Pull Request) pour que votre travail soit merge sur la branche principale (`main`).

## Documentations 
- [PHP](https://www.php.net/docs.php)
- [PHP The Right Way](https://eilgin.github.io/php-the-right-way/)
