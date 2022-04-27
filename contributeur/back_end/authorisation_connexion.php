
<?php
require('../back_end/include/_inc_parametres.php'); 
require('../back_end/include/_inc_connexion.php');
        
// préparation de la requête : recherche de l'utilisateur
$req_pre = $cnx->prepare("SELECT MDP_UT FROM internaute WHERE COURRIEL_UT = :COURRIEL_UT AND STATUS_UT='c'");
// liaison de la variable à la requête préparée
$req_pre->bindValue(':COURRIEL_UT', $_POST['COURRIEL_UT'], PDO::PARAM_STR);
$req_pre->execute();

//le résultat est récupéré sous forme d'objet
$ligne=$req_pre->fetch(PDO::FETCH_OBJ);
// récupération du mot de passe
if ($ligne) {$mdp = $ligne->MDP_UT;

    // fermeture du curseur associé à un jeu de résultats
    $req_pre->closeCursor();
} 
?>
