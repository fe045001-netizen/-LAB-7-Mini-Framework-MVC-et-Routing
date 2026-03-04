# LAB 7 — Mini-Framework MVC et Routing
  # Description du projet

Ce projet consiste à développer un mini-framework MVC en PHP 7 intégrant :

Un Front Controller

Un Router (GET/POST + paramètres dynamiques)

Une architecture MVC minimale

Un accès sécurisé aux données via PDO

Un CRUD complet pour la gestion des étudiants

Pagination

Journalisation (logs)

Base de données utilisée : gestion_etudiants_pdo

# Prérequis

PHP 7.x (CLI + serveur interne activé)

MySQL ou MariaDB

Extension pdo_mysql activée

Navigateur moderne

Éditeur de code (IntelliJ / PHPStorm / VS Code)

Notions : POO, PDO, MVC, HTTP
# Structure du projet
project-root/
  public/
  
    index.php
  src/
  
    Container/
    
      AppFactory.php
    Controller/
      BaseController.php
      EtudiantController.php
    Core/
      Router.php
      Request.php
      Response.php
      View.php
    Dao/
      DBConnection.php
      Logger.php
      EtudiantDao.php
      FiliereDao.php
  views/
    layout.php
    etudiant/
      index.php
      create.php
      edit.php
      show.php
  logs/
  test_routes.md
