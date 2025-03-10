Calcul de la Surface Protégée

Ce projet est une application Laravel permettant de calculer la surface protégée par des montagnes contre des vents violents arrivant de l'ouest.

🚀 Installation

1️⃣ Prérequis

PHP >= 8.0

Composer

2️⃣ Cloner le dépôt

git clone https://github.com/jeltiihab/raedy-veolia-projet-ji.git
cd MountainShelter

3️⃣ Installer les dépendances

composer install

4️⃣ Configurer l'environnement

php artisan key:generate

5️⃣ Lancer le serveur Laravel

php artisan serve

L'application est accessible sur http://127.0.0.1:8000

Utilisation de l'API

Endpoint :

POST /shelter

Paramètres attendus :

n : Nombre total de terrains (entier)

heights : Liste des hauteurs séparées par des espaces (ex: "30 27 17 42 29 12 14 41 42 42")

Exemple de requête avec cURL :

🛠️ Choix de conception

MVC Laravel : Séparation claire entre logique métier et présentation

Route API simple : Facile à utiliser avec des requêtes POST

Protection CSRF désactivée pour cette route : Permet l'utilisation d'outils comme Postman ou cURL

Validation des entrées : Vérification du format des données avant traitement
