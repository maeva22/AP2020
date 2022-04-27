<!doctype html>
<html>
<head>

</head>
<body>
<?php
include("connexion.php");
$requete = $connexion->prepare('SELECT COURRIEL_UT,MDP_UT,STATUT_UT from  internaute order by COURRIEL_UT');
$requete->execute();
$lignes = $requete->fetchAll();
?>
