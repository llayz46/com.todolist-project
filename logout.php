<?php 
require_once __DIR__ . ('/lib/session.php');

// Prévenir les attaques de session fixation
session_regenerate_id(true);

// Détruire la session (supprimer les données de session dans le serveur et le cookie de session dans le navigateur)
session_destroy();

// Supprimer les données de session du tableau $_SESSION
unset($_SESSION['user']);

// Rediriger l'utilisateur vers la page d'accueil
header('Location: index.php');