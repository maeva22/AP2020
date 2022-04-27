
<?php
require('../include/_inc_parametres.php'); 
require('../include/_inc_connexion.php');
require('../include/dateFrancais.php');
    $id = $_POST['article_id'];
    echo $id;
    $requete = $cnx->prepare('UPDATE article set STATUS_ART="R",date_accord_art=now() where id_art=:id_art');
    $requete ->bindParam(":id_art",$id);
    $requete->execute();
?>
