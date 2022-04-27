
<?php
require('../include/_inc_parametres.php'); 
require('../include/_inc_connexion.php');
require('../include/dateFrancais.php');
    $id = $_POST['article_id'];
    echo $id;
    $requete = $cnx->prepare('UPDATE article set STATUS_ART="A",DATE_ACCORD_ART=NOW() where id_art=:id_art;');
    $requete ->bindParam(":id_art",$id);
    $requete->execute();
?>
