<?php
require('include/_inc_parametres.php'); 
require('include/_inc_connexion.php');
//    on récupère toutes les lignes de la table Logiciel
$resultat = $cnx->prepare("select * FROM categorie ;");
$resultat->execute();
//le résultat est récupéré sous forme d'objet
$categories= $resultat->fetchAll();
?>