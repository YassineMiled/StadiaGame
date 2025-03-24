<?php
include_once "modele/panier.dao.php";

viderPanier();

// Message de succès
$_SESSION['flash'] = [
    'type' => 'success',
    'message' => "Votre panier a été vidé."
];

// Rediriger vers le panier
header("Location: index.php?action=panier");
exit();
?>