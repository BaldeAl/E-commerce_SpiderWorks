<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<p align="center"><a href="https://github.com/BaldeAl/E-commerce_SpiderWorks" target="_blank"><img src="https://github.com/user-attachments/assets/07332814-d3ed-4100-ad25-eb8f79ef52d5" width="400" alt="Spiderworks Logo"></a></p>

# Projet Boutique en ligne

Le projet consiste à développer une boutique en ligne qui propose à la vente des jeux vidéo.
## Le projet se limitera aux fonctionnalités suivantes :
### 1. Le site contiendra une page d’accueil (contenue libre mais en rapport avec le sujet).
### 2. Un header avec les onglet : Accueil, produit et une icône « Panier » permettant d’afficher le panier.
### 3. Affichage des jeux dans une page « produit » avec une image, un titre et un prix.
### 4. En cliquant sur un produit, l’afficher dans une autre page avec toutes ses informations. Dans cette page, 
ajouter un bouton « Ajouter au panier ».
### 5. En cliquant sur le bouton « Ajouter au panier », le produit s’ajoute au panier.
### 6. Ajouter l’authentification. Lorsqu’on insère un panier en base de données, si l’utilisateur s’est identifié 
alors on enregistre son id dans le champ « user_id » de la table « panier », sinon l’ignorer et, dans ce 
cas, le panier est anonyme (car le champ user_id est nullable).
## Les models à créer :
Produit (id, nom (String), descrpition (text), prix (Decimal, 8, 2), stock (Integer), plateforme_id)
Plateforme (id, nom (String))
Panier (id, montant (Decimal, 8, 2), created_at, updated_at, user_id)
DetailPanier(id, panier_id, produit_id, qte_com (Integer))
## Remarques :
### 1. La table panier stocke les paniers. Elle contient le montant total du panier, la date de création et/ou 
de modification ainsi que l’id du user qui le crée s’il s’est identifié.
### 2. La table detail_paniers sert à stocker les produits ajoutés à un panier ainsi que la quantité 
commandée pour chaque produit ajouté.
### 3. Concernant la table Panier, on utilisera les timestamps gérés par Laravel. Dans le fichier de 
migration, on créera la table paniers comme suit :
### 4. Pour récupérer le user actuellement connecté :
2
## Contraintes :
### - Bootstrap 5.3 obligatoire
### - La table produit aura une clé étrangère plateforme_id faisant référence à la clé primaire de la table  plateforme
### - La table panier aura une clé étrangère user_id faisant référence à la clé primaire de la table user
### - La table detail_panier aura : 
Une clé étrangère panier_id faisant référence à la clé primaire de la table panier
Une clé étrangère produit_id faisant référence à la clé primaire de la table produit
## Rappel :
Par défaut, Eloquent s'attend à ce que chaque table dans votre base de données ait deux colonnes de 
### timestamp : created_at et updated_at. Eloquent automatiquement :
#### • Met à jour le champ created_at avec la date et l'heure actuelles quand un nouveau modèle est 
créé et sauvegardé pour la première fois.
#### • Met à jour le champ updated_at à chaque fois que le modèle est modifié et sauvegardé
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
