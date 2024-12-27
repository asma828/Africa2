# Projet - Version 2 (Programmation Orientée Objet avec PHP)

## Description

Ce projet consiste à développer une version 2 du système de gestion des entités (Continents, Pays, Villes) en utilisant la Programmation Orientée Objet (POO) avec PHP. L'objectif est d'intégrer de nouvelles fonctionnalités et de gérer les entités de manière plus optimisée en back-end. Ensuite, l'interface utilisateur (UI/UX) sera améliorée pour offrir une expérience plus moderne et attrayante.

## Fonctionnalités

- **Authentification des utilisateurs** : Implémentation d'un système d'authentification pour les utilisateurs standards et administrateurs.
- **Gestion des entités** :
  - Ajouter, modifier ou supprimer des continents, des pays et des villes.
  - Afficher la liste des continents, pays et villes avec leurs détails respectifs.
- **Base de données** : Centralisation de la gestion de la connexion et des requêtes SQL avec PDO pour une gestion sécurisée des données.

## Entités

Les entités suivantes seront gérées à travers des classes PHP :

- **Continent** : 
  - ID
  - Nom
  - Nombre de pays
- **Pays** :
  - ID_Pays
  - Nom_Pays
  - Population_Pays
  - Langue_Pays
  - Continent associé
- **Ville** :
  - IDVille
  - Nom_Ville
  - Description_Ville
  - Type_Ville (capitale ou autre)
  - Pays associé

## Architecture du projet

Le projet sera basé sur une architecture orientée objet, avec des classes PHP représentant chaque entité et une gestion centralisée des données via une classe dédiée à la gestion de la base de données.

### Diagramme de Cas d'Utilisation
En tant que concepteur, vous devez corriger et enrichir le diagramme de cas d'utilisation réalisé dans la version 1, en y ajoutant les fonctionnalités manquantes et les améliorations nécessaires.

### Diagramme de Classes UML
En tant que concepteur, vous devrez réaliser un diagramme de classes UML pour représenter la structure du système.

### Classes PHP

Les classes à implémenter sont les suivantes :

1. **GestionBaseDeDonnées** : Cette classe centralise la connexion à la base de données et les requêtes SQL avec PDO. Elle assure également la gestion sécurisée des données avec des requêtes préparées.

2. **User** : Classe pour gérer l'authentification de l'utilisateur.
   - Méthodes : `login()`, `logout()`, etc.

3. **Admin** : Classe pour les actions d'administration, telles que l'ajout, la modification ou la suppression de continents, pays et villes.
   - Méthodes : `addContinent()`, `addCountry()`, `addCity()`, `updateContinent()`, `updateCountry()`, `updateCity()`, `deleteContinent()`, `deleteCountry()`, `deleteCity()`, etc.

4. **Continent** : Classe représentant un continent.
   - Attributs : `ID`, `Nom`, `NombrePays`
   - Méthodes : `getContinents()`, `addContinent()`, `updateContinent()`, `deleteContinent()`, etc.

5. **Country** : Classe représentant un pays.
   - Attributs : `ID_Pays`, `Nom_Pays`, `Population_Pays`, `Langue_Pays`, `Continent associé`
   - Méthodes : `getCountries()`, `addCountry()`, `updateCountry()`, `deleteCountry()`, etc.

6. **City** : Classe représentant une ville.
   - Attributs : `IDVille`, `Nom_Ville`, `Description_Ville`, `Type_Ville`, `Pays associé`
   - Méthodes : `getCities()`, `addCity()`, `updateCity()`, `deleteCity()`, etc.

## Technologies utilisées

- **PHP** : Langage de programmation principal pour la gestion du back-end.
- **MySQL** : Base de données pour stocker les informations relatives aux continents, pays et villes.
- **PDO** : Pour sécuriser et gérer les connexions à la base de données et les requêtes SQL.
