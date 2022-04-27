<?php
// affichage lors du clic sur Stage dans la page accueil.php
require('include/_inc_parametres.php'); 
require('include/_inc_connexion.php');
require('include/dateFrancais.php');
            
//    on récupère toutes les lignes de la vue
$resultat = $cnx->prepare("select * FROM article INNER JOIN categorie ON article.ID_CAT=categorie.ID_CAT INNER JOIN internaute ON internaute.ID_UT=article.ID_CONT WHERE STATUS_ART='A';");
//le résultat est récupéré sous forme d'objet
$resultat->execute();
$metiers = $resultat->fetchAll();
?>
