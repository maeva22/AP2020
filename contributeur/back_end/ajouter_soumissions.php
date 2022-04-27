<?php
require('include/_inc_parametres.php'); 
require('include/_inc_connexion.php');
require('include/dateFrancais.php');
// recherche du dernier numéro de stage

$resultat = $cnx->query("select MAX(ID_ART) + 1 num FROM article ");
$resultat->setFetchMode();
$ligne = $resultat->fetch();
$id = $ligne['num'];
// préparation de la requête : recherche d'un stage particulier
$req_pre = $cnx->prepare(
    "INSERT INTO Stage (ID_ART,TITRE_ART, DESCR_ART, SALAIRE_ART) 
		VALUES (:id,:TITRE_ART, :DESCR_ART, :SALAIRE_ART);"
);
        // liaison de la variable à la requête préparée
$req_pre->bindValue(':id', $id, PDO::PARAM_INT);
$req_pre->bindValue(':TITRE_ART', $_POST['TITRE_ART'], PDO::PARAM_STR);
$req_pre->bindValue(':DESCR_ART', $_POST['DESCR_ART'], PDO::PARAM_STR);
$req_pre->bindValue(':SALAIRE_ART', $_POST['SALAIRE_ART'], PDO::PARAM_INT);
//$req_pre->bindValue(':categorie', strtoupper($_POST['categorie']), PDO::PARAM_STR);
//$req_pre->bindValue(':ID_CONT', $SESSION['connect'], PDO::PARAM_STR);
$req_pre->execute();
header('Location:../front_end/soumissions_attente.php');
?>
,DATE_PROP_ART,ID_CONT,ID_CAT,STATUS_ART

,NOW(),ID_CONT,:ID_CAT,:categorie,'P'