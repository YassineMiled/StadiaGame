<?php
include_once "modele/jeu.dao.php";

// Récupérer tous les jeux
$lesJeux = getAllJeux();


// Inclure la vue
include "vue/entete.php";
include "vue/vueListeJeux.php";
include "vue/pied.php";
?>