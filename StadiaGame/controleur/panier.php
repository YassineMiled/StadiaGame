<?php
include_once "modele/panier.dao.php";

// Récupérer le contenu du panier
$contenuPanier = getContenuPanier();
$totalPanier = getTotalPanier();

// Récupérer des jeux recommandés
include_once "modele/jeu.dao.php";

// Inclure la vue
include "vue/entete.php";
include "vue/vuePanier.php";
include "vue/pied.php";
?>