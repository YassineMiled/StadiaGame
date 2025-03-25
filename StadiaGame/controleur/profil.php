<?php
include_once "modele/utilisateur.dao.php";
include_once "modele/jeu.dao.php";

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    // Rediriger vers la page de connexion
    $_SESSION['flash'] = [
        'type' => 'info',
        'message' => "Vous devez être connecté pour accéder à votre profil."
    ];
    header("Location: index.php?action=connexion");
    exit();
}

// Récupérer les informations de l'utilisateur
$user = $_SESSION['user'];

// Variables pour la vue
$erreurs = [];
$success = false;

// Inclure la vue
include "vue/entete.php";
include "vue/vueProfil.php";
include "vue/pied.php";
?>