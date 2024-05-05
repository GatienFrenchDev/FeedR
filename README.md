# 📰 MyRSS

![image](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![image](https://img.shields.io/badge/MariaDB-003545?style=for-the-badge&logo=mariadb&logoColor=white)
![image](https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E)

## Outil collaboratif de gestion de flux RSS

Un projet développé à Tours, France.

## Fonctionnalités

_Toutes les fonctionnalitées notées ci dessous ne sont pas forcement encore disponibles pour l'instant mais seront ajoutées au fur et à mesure du temps._

- Création d'espaces collaboratifs avec différents utilisateurs.
- Ajout de flux RSS dans des catégories spécifiques.
- Prise en charge des fluxs RSS, des chaînes YouTube, Google News, etc.
- Recommandations de fluxs RSS et d'articles entre utilisateurs.
- Taux de rafraîchissement des articles inférieur à 5 minutes.
- Export des articles aux formats xlsx, csv, json, ...

## Technologies utilisées

MyRSS s'appuie sur plusieurs projets open source pour fonctionner efficacement :

- [moment.js](https://github.com/moment/moment/) - Une bibliothèque JavaScript pour l'analyse, la validation, la manipulation et le formatage des dates.
- [rss-php](https://github.com/dg/rss-php) - Une petite bibliothèque PHP pour faciliter le traitement des flux RSS.
- [looping](https://www.looping-mcd.fr/) - Un logiciel de modélisation conceptuelle de données / modèle logique de données.

MyRSS est basé sur PHP 8.2 et MariaDB 10.4

## Déploiement local sous Windows

- Téléchargez d'abord [XAMPP](https://www.apachefriends.org/fr/index.html) avec les modules `Apache` et `MySQL` (l'installation par défaut suffira).
- Une fois installé, lancez XAMPP en tant qu'administrateur (clic droit sur `xampp.exe` > `Exécuter en tant qu'administrateur`).
- Démarrez `Apache` et `MySQL` depuis le panneau de contrôle de XAMPP.
- Téléchargez le code source de ce dépôt (bouton vert en haut à droite sur le dépôt, intitulé `<> Code`, puis `Download ZIP`).
- Placez la totalité des fichiers contenu dans le dossier `MyRSS-Main` de l'archive dans le dossier `C:/xampp/htdocs`, en ayant préalablement vidé le contenu du dossier.
- Accédez à l'adresse `http://localhost/phpmyadmin`, créer une base de données intitulée `myrss` puis allez dans l'onglet `Importer` et importez le fichier nommé `/docs/db_example.sql` présent dans le dépôt.
- Remplacez dans le fichier `lib/tools.php:3` les `xxxxx` par votre clé d'API YouTube pour que l'ajout de chaines YouTube en tant que flux fonctionne (voir https://console.cloud.google.com/apis/api/youtube.googleapis.com/credentials si besoin de créer une clé d'API).
- Le site web devrait maintenant fonctionner sans problème ! Un compte de test est déjà crée dans la base de données avec les identifiants suivants :
```
mail : john@example.com
pass : password
```
- Pour récupérer les nouveaux articles, il faut envoyer une requete GET à l'url `/scripts/fetch-all-fluxs`

## Structure du projet

MyRSS essaye de se baser sur une architecture MVC.

```
.
├───api                 # Endpoints API appelés depuis le JS côté client
├───docs                # Fichiers utiles à la documentation du projet
│   └───mcd             
├───includes            # Fichiers PHP appelés lors de l’envoi de formulaire
├───lib                 # Librairies PHP utiles au projet
├───model               # Regroupement des fonctions interrogeant la db
├───scripts             # Script à executer pour récupérer les derniers articles
├───tests               
└───view                # Templates HTML
    ├───components      # Composants HTML ré-utilisés
    ├───css             
    └───js              
        ├───classes
        └───lib         # Librairies tierces utilisés dans le JS
```
