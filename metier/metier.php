<!DOCTYPE html>
<html lang="fr">
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="../assets/css/css.css" rel="stylesheet" type="text/css"> 
    <link href="../assets/css/csslecteur.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php include ("templates/navbar.php") ?>
<p> 
<?php  
include("parametres.php");
include("connexion.php");

$ida = $_GET['ida'];
$pre = $cnx->prepare("SELECT * FROM article WHERE ID_ART =?");
$pre->execute(array($ida));
$art = $pre->fetchAll();
?> 
</p>

<br>
<br>

<div id="header">
<?php foreach($art as $arts){ ?>
    <title> <?php echo $arts['TITRE_ART'] ?></title>
        </a>
          
        <h1>    
            BTS SIO - <?php echo $arts['TITRE_ART'] ?>
        </h1>
</div>
<div id="bandeau1">
    <div id="Desc">   
        <div id="Title">
            Bref descriptif   
        </div>
        <div id="col-sm-2">
        <br>
        <br>
        <?php echo $arts['DESCR_ART']?>
        </div>
    </div>
</div>
<div id="bandeau2">
    <div id="Salaire">
        <div id="Title">
            Salaire
        </div>
        <div id="jcol-sm-2">
        <br>
        <br>
        <?php echo $arts['SALAIRE_ART']?>
        </div>
    </div>
</div>
    
    <?php 
        }
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>