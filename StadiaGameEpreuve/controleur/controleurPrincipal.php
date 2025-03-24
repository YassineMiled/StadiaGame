<?php
function controleurPrincipal($action) {
    $lesActions = array();
    
    // Routes principales
    $lesActions["defaut"] = "listeJeux.php";
    $lesActions["about"] = "about.php";
    
    // Routes pour les jeux
    $lesActions["jeux"] = "listeJeux.php";
    $lesActions["detail"] = "detailJeu.php";
    
    // Routes pour l'authentification
    $lesActions["connexion"] = "connexion.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["inscription"] = "inscription.php";
    $lesActions["profil"] = "profil.php";
    $lesActions["updProfil"] = "miseAJourProfil.php";
    
    // Routes pour le panier
    $lesActions["panier"] = "panier.php";
    $lesActions["ajoutPanier"] = "ajoutPanier.php";
    $lesActions["supprimerPanier"] = "supprimerPanier.php";
    $lesActions["viderPanier"] = "viderPanier.php";
    $lesActions["commander"] = "commander.php";
    $lesActions["mesCommandes"] = "mesCommandes.php";
    
    // Vérifier si l'action demandée existe dans le tableau
    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}
?>