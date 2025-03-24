<?php
include_once "modele/commande.dao.php";
include_once "modele/jeu.dao.php";

// Récupérer l'ID de l'utilisateur connecté
$userId = isset($_SESSION['user']) ? $_SESSION['user']['id'] : null;

// Vérifier que l'utilisateur est connecté
if ($userId === null) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    $_SESSION['flash'] = [
        'type' => 'info',
        'message' => "Vous devez être connecté pour accéder à vos commandes."
    ];
    header("Location: index.php?action=connexion");
    exit;
}
    // Récupérer toutes les commandes de l'utilisateur
    $lesCommandes = getCommandePassee($userId);

    // Inclure la vue pour afficher la liste des commandes
    include "vue/entete.php";
    include "vue/vuemesCommandes.php";
    include "vue/pied.php";
