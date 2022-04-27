<?php
if ($_POST['COURRIEL_UT'] == '' OR $_POST['MDP_UT'] == '') {
            echo "Merci de bien renseigner l'ensemble des champs";
            echo "<br />";
            echo "<a href='connexion_administrateur.php'>Retour</a>";
}
else
{   // démarrage de la session et sauvegarde des informations dans 2 variables
            
    session_start();
    require_once('authorisation_connexion.php');
    // la variable de session connect vaut true ou false!!!!!!!!
    if (isset($mdp) && $mdp === $_POST['MDP_UT'] ) {
        $_SESSION['connect'] = $mdp == $_POST['MDP_UT'];
        //$_SESSION['connect'] = $mdp == sha1($_POST['MDP_UT']);
        $_SESSION['connect'] = $_POST['COURRIEL_UT'];
        header('Location:../front_end/page_admin.php');
    }
    else 
    {
        echo "Erreur sur identifiant ou mot de passe";
        echo "<br />";
        echo "<a href='../front_end/connexion_administrateur.php'>Retour</a>";
    }
}
?>

