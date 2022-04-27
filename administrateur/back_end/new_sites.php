
<?php
require('include/_inc_parametres.php'); 
require('include/_inc_connexion.php');
require('include/dateFrancais.php');
    $requete = $cnx->prepare("SELECT * from article INNER JOIN categorie ON article.ID_CAT = categorie.ID_CAT ORDER BY DATE_PROP_ART DESC");
    $requete->execute();
    $result = $requete->fetchall();
?>
