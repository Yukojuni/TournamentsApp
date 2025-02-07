Ymmersions - Gestion de Tournois (Symfony)
Description
Le projet "Ymmersions" est une application web de gestion de tournois développée avec Symfony. Le site permet aux utilisateurs de s'inscrire, de créer des équipes, de participer à des tournois, et aux administrateurs de gérer dynamiquement les utilisateurs, les équipes et les tournois à travers un back office sécurisé.

Ce projet a été conçu dans le cadre de l'initiation à Symfony et vous offre une expérience d'apprentissage complète, avec la mise en place d'une authentification, un système de gestion de tournois, et un panneau d'administration pour gérer les données de manière efficace.

Fonctionnalités principales
Utilisateurs non connectés
Accès à la landing page.
Inscription à l’application avec des informations de base : nom, prénom, date de naissance, email, mot de passe.
Connexion via email et mot de passe.
Utilisateurs connectés
Accès et modification de leur profil.
Consultation des tournois selon leur statut (en cours, terminé, à venir).
Création et gestion d’équipes.
Inscription d’une équipe à un tournoi.
Consultation des détails des tournois.
Déconnexion.
Administrateurs
Accès à un back office sécurisé via un lien visible uniquement pour les administrateurs.
Gestion complète des utilisateurs, des équipes et des tournois via le back office (CRUD).
Gestion de l’avancement des tournois (victoires/défaites).
Administration des matchs et des résultats des tournois.
Vue d'ensemble des équipes inscrites aux tournois.
Technologies utilisées
Symfony : Framework PHP principal du projet.
EasyAdminBundle : Utilisé pour le développement du back-office administrateur.
FakerPHP : Pour la génération dynamique de données (ex : utilisateurs, équipes, tournois).
Doctrine ORM : Gestion des bases de données.
Twig : Moteur de templates utilisé pour le rendu des vues.
Bootstrap 5 : Framework CSS pour une interface responsive et esthétique.
Installation
Prérequis
PHP >= 8.1
Composer
Symfony CLI
MySQL ou MariaDB
Étapes d'installation
Clonez le repository

bash
Copier
Modifier
git clone https://github.com/votre-compte/ymmersion-symfony.git
cd ymmersion-symfony
Installez les dépendances via Composer

bash
Copier
Modifier
composer install
Créez la base de données

bash
Copier
Modifier
php bin/console doctrine:database:create
Appliquez les migrations

bash
Copier
Modifier
php bin/console doctrine:migrations:migrate
Générez des données de test (facultatif)

bash
Copier
Modifier
php bin/console doctrine:fixtures:load
Lancez le serveur local Symfony

bash
Copier
Modifier
symfony server:start
Vous pouvez maintenant accéder à votre application via http://localhost:8000.

Compte administrateur par défaut
Email : root@root.com
Mot de passe : Root1234
Structure du projet
src/Controller : Contient les contrôleurs pour gérer la logique des pages du site.
src/Entity : Contient les entités de la base de données (Utilisateur, Équipe, Tournoi, etc.).
src/Repository : Contient les classes de repository utilisées pour interagir avec la base de données.
templates : Contient les fichiers Twig pour rendre les pages HTML.
config/packages : Contient les configurations des bundles comme EasyAdminBundle et Symfony Security.
Roadmap du projet
Choix du thème du site et modélisation de la base de données.
Création des entités pour les utilisateurs, équipes et tournois.
Mise en place de l’authentification et gestion des utilisateurs.
Création de l'interface utilisateur (pages de connexion, inscription, et gestion des tournois).
Mise en place du back office avec EasyAdminBundle pour gérer les utilisateurs et tournois.
Déploiement sur un serveur ou hébergement de production (facultatif).
Contribuer
Clonez le repository.
Créez une branche pour la fonctionnalité que vous souhaitez ajouter.
bash
Copier
Modifier
git checkout -b feature/nouvelle-fonctionnalite
Effectuez vos changements et committez-les.
bash
Copier
Modifier
git commit -m "Ajout de la fonctionnalité X"
Poussez vos changements.
bash
Copier
Modifier
git push origin feature/nouvelle-fonctionnalite
Ouvrez une Pull Request pour revue.
Auteurs
Votre Nom - Créateur du projet.
Ressources
Symfony Documentation
EasyAdminBundle
FakerPHP
