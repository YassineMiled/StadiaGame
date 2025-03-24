<?php
include_once "modele/utilisateur.dao.php";
include_once "modele/commande.dao.php";
include_once "modele/jeu.dao.php";

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    // Rediriger vers la page de connexion
    $_SESSION['flash'] = [
        'type' => 'info',
        'message' => "Vous devez être connecté pour finaliser votre commande."
    ];
    header("Location: index.php?action=connexion");
    exit();
}

// Récupérer l'ID de l'utilisateur
$userId = $_SESSION['user']['id'];
// Déboguer la valeur de userId
error_log("ID de l'utilisateur: " . $userId);

// Récupérer le contenu du panier
$contenuPanier = getContenuPanier();
$totalPanier = getTotalPanier();

// Si le panier est vide, rediriger vers la page du panier
if (empty($contenuPanier)) {
    $_SESSION['flash'] = [
        'type' => 'warning',
        'message' => "Votre panier est vide."
    ];
    header("Location: index.php?action=panier");
    exit();
}

// Créer la commande de l'utilisateur
$commandeId = creerCommande($userId);

// Vérifier si la commande a été créée avec succès
if ($commandeId) {
    $_SESSION['flash'] = [
        'type' => 'success',
        'message' => "Votre commande a été passée avec succès! Numéro de commande: " . $commandeId
    ];
} else {
    $_SESSION['flash'] = [
        'type' => 'danger',
        'message' => "Une erreur est survenue lors de la création de votre commande. Veuillez réessayer."
    ];
}

// Inclure la vue
include "vue/entete.php";
include "vue/vueCommander.php";
include "vue/pied.php";
?>