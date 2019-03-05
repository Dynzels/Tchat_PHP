<?php
// On ouvre les sessions
session_start();

// Chargement des différents fichiers dont on a besoin
require('Model/Database.php'); // Connexion à la BDD
require('Model/Post.php'); // Gestion des messages

// On requiert notre FrontControlleur qui fera office de routeur
require('Controllers/frontcontroller.php'); // Controlleurs
