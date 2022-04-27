
    <?php
require('../include/_inc_parametres.php'); 
require('../include/_inc_connexion.php');
require('../include/dateFrancais.php');
    foreach ($_POST as $key => $value) {
        $id = str_replace("option_", "", $key);
        $choix = $value;
        echo $choix;
        $requete = $cnx->prepare('UPDATE article set STATUS_ART=:choix,date_accord_art=now() where id_art=:id_art');
        $requete->bindParam(":id_art", $id);
        $requete->bindParam(":choix",$choix);
        $requete->execute();
        header("Location: ../../front_end/metiers_soumis.php");
        exit();


    }
    ?>
