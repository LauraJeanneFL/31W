# TP2: Club de voyage

Objectifs du TP2:
• Réaliser un site WordPress pour un club de voyage. Le club offre à ses membres des voyages vers des destinations originales partout dans le monde.
• Chaque destination est catégorisée pour permettre aux membres de se renseigner de façon spécifique selon leur gout.
• Le design général permettra de mettre en valeur les offres de voyages réservées à ses membres.
• Déployer votre projet sur le serveur Web hosting Canada.
Catégories de voyage :
'Aventure',
'Culturel',
'Repos',
'Zen',
'Sport',
'Économique',
'Croisière',
'Paysage',
'Pleine nature',

Ce projet vous permettra d'améliorer globalement votre thème existant en y intégrant les éléments suivants:
• Un pied de page
• Un design de thème amélioré avec Sass et PHP
• Utilisation de la REST API de Wordpress
• Utilisation du customizer pour ajouter les nouvelles options de la section « hero »
• Amélioration de l'affichage produit par les modèles:
o front-page.php
o single.php
o category.php
o search.php
o header.php
o footer.php
• Une mise en page entièrement adaptative

## Déroulement du projet

Les « commits » seront poussés dans votre dépôt sur GitHub dans la branche tp2.
L'ensemble des commits devra s'étaler progressivement à partir de la journée de remise du devis jusqu'à la remise finale du TP.
Un minimum de 20 commits pour le thème permettra d'évaluer l'évolution de votre projet.
Le serveur « WHC » Web hosting canada
Utilisez votre compte «WHC » pour déployer la version finale de votre site.
Gardez votre environnement de fichiers « WHC » le plus simple possible en retirant tous les éléments non nécessaires. (.git, Sass, garder uniquement votre thème)
Ce que vous devez réaliser :

## L’entête : header.php   (Pondération:20%)

Contiendra :
• Un logo (gérer par le customizer)
• Une zone de recherche
• Un menu adaptatif avec bouton « burger » qui fait apparaitre/disparaitre
• Menu générer par wp__nav__menu()
• La navigation principale

## La page d’accueil : front-page.php (Pondération:40%)

Sera constitué :
• D’une section « hero  » cette section occupera une hauteur de 100vh avec l’entête. La section « Hero » sera générée avec le « Customizer ».
• D’une section de blocs de destination favorite
• Un formulaire d’inscription
• Une galerie d’images et carrousel de destinations du choix de l’éditeur 
• À l’aide du plugin « filtrecategorie » Une section filtre permettant d’afficher les résumés de destinations par catégorie. 
• Chaque lien de destination contient le nom de la destination, une courte description, une image et un lien vers la description complète (single.php)

## La « section héro » contiendra

• Le titre de l’association
• Une description
• Un bouton vers un formulaire d’inscription
• Une image occupant la moitié de la section
• L’adresse de l’association, courriel, téléphone
• Icônes site sociaux
• Contrôle  css et la 
• Chacun des champs de la section « héro » sera généré par le « customizer »

Une description d’une destination (single.php, category.php) (Pondération:10%)

## Une page single.php affichant une destination avec:

•Titre
• Description
• Galerie et carrousel
• Champs personnalisé (ex : température min/max, date idéales pour destination, etc)
• Liens d’accès aux destinations
• Galerie pour un destination = dans single.php

Le pied de page: footer.php (Pondération:20%)

La zone footer permettra d'intégrer des liens conçus à partir de la fonctionnalité « wp_nav_menu » et des données à partir du customizer. Le footer contiendra :

• Des liens externes sur le tourisme : aller sur google externe  (wp_nav_menu)
• L’adresse du collège
• Téléphone
• Couriel
• Zone de recherches
• Image (logo)
• Icônes des sites sociaux
• Le nom de l’auteur
• Un lien vers votre github

## Search.php et 404.php (Pondération: 10%)

•Seront adaptés pour bien s’intégrer au concept de club de voyage

## Design amélioré

La pagination globale « layout » du site et les différentes zones de la page: l'entête, le footer et la partie principale « main » de la page devront être bien structurés, clairs, originaux et entièrement adaptatifs.
Barème de correction sur 25 points

### 1.Organisation des commits sur GitHub minimum 20 commits pour le thème (5 points)

•Minimum de 20 commits étalés sur toute la durée du TP
•Messages clairs, spécifiques, préfixés et non redondants
•Une branche tp2
•Déploiement de votre site sur « WHC »
•Un readme.md pour le thème: auteur, titre du projet, description et lien vers votre site sur l’hébergeur « WHC »

### 2.Organisation de l'entête, footer et partie principale. Qualité du design et de l'intégration des différents éléments de contenu. s'affichent de façon optimale.  (5 points)

### 3.La programmation du thème et des plugins est bien structurés et fonctionnent comme prévu. (10 points)

### .Design général des pages et organisation de l’information.  Adaptabilité générale du site.. (5 points)