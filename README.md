Ymmersions - Gestion de Tournois (Symfony)
Description
Le projet "Ymmersions" est une application web de gestion de tournois développée avec Symfony. Cette plateforme permet aux utilisateurs de s'inscrire, de créer des équipes, de participer à des tournois, et aux administrateurs de gérer dynamiquement les utilisateurs, les équipes et les tournois via un back-office sécurisé.

Ce projet a été conçu dans le cadre de l'initiation à Symfony, offrant une expérience d'apprentissage complète couvrant l'authentification, la gestion des tournois et la création d'un panneau d'administration pour la gestion des données.

Fonctionnalités principales
Utilisateurs non connectés
Accès à la landing page
Inscription avec des informations de base : nom, prénom, date de naissance, email, mot de passe.
Connexion via email et mot de passe.
Utilisateurs connectés
Accès et modification du profil.
Consultation des tournois selon leur statut (en cours, terminé, à venir).
Création et gestion d’équipes.
Inscription à un tournoi.
Consultation des détails d’un tournoi.
Déconnexion.
Administrateurs
Back-office sécurisé visible uniquement pour les administrateurs.
Gestion complète des utilisateurs, équipes et tournois (CRUD).
Suivi de l’avancement des tournois (victoires/défaites).
Administration des matchs et des résultats.
Vue d'ensemble des équipes inscrites aux tournois.
Technologies utilisées
Symfony : Framework PHP principal du projet.
EasyAdminBundle : Pour la gestion du back-office administrateur.
FakerPHP : Génération dynamique de données (utilisateurs, équipes, tournois).
Doctrine ORM : Gestion des bases de données.
Twig : Moteur de templates pour l'affichage des vues.
Bootstrap 5 : Framework CSS pour une interface responsive et esthétique.
Installation
Prérequis
Avant de commencer l'installation, vous devez avoir les outils suivants installés sur votre machine :

PHP >= 8.1
Composer
Symfony CLI
MySQL ou MariaDB
Étapes d'installation
Clonez le repository

bash
Copier
Modifier
git clone https://github.com/Yukojuni/TournamentsApp.git
cd TournamentsApp
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
Voici l'organisation des fichiers et dossiers du projet :

src/Controller : Contient les contrôleurs pour la logique des pages du site.
src/Entity : Contient les entités de la base de données (Utilisateur, Équipe, Tournoi, etc.).
src/Repository : Contient les classes de repository pour interagir avec la base de données.
templates/ : Contient les fichiers Twig pour rendre les pages HTML.
config/packages/ : Contient les configurations des bundles (EasyAdminBundle, Symfony Security, etc.).
Roadmap du projet
Choix du thème du site et modélisation de la base de données.
Création des entités pour les utilisateurs, équipes et tournois.
Mise en place de l’authentification et gestion des utilisateurs.
Création de l'interface utilisateur (pages de connexion, inscription, et gestion des tournois).
Mise en place du back-office avec EasyAdminBundle pour gérer les utilisateurs et tournois.
Déploiement sur un serveur ou hébergement de production (facultatif).
Contribuer
Clonez le repository :

bash
Copier
Modifier
git clone https://github.com/Yukojuni/TournamentsApp.git
Créez une branche pour la fonctionnalité que vous souhaitez ajouter :

bash
Copier
Modifier
git checkout -b feature/nouvelle-fonctionnalite
Effectuez vos changements et committez-les :

bash
Copier
Modifier
git commit -m "Ajout de la fonctionnalité X"
Poussez vos changements :

bash
Copier
Modifier
git push origin feature/nouvelle-fonctionnalite
Ouvrez une Pull Request pour revue.

Auteurs
Votre Nom - Créateur du projet.
GitHub Profile
Ressources
Symfony Documentation
EasyAdminBundle
FakerPHP
