<?php
session_start();
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300, 400, 700&display=swap">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/Style_métiers.css">
  <title>BTS SIO</title>
</head>


<body>

<?php 
    include("../templates/navbar_contri.php");
?>

<section  id="competences">
<div class="competences container">
    <div id=contenu>

   <?php
    if ($_SESSION['connect'] == true) {
      echo 'Bonjour ' . $_SESSION['connect'];
    ?>
    </h6>
    <div id=contenu>
<h2>stage</h2>
<p>Sur cette page, vous pouvez ajouter une soumission.
<form method="post" action="../back_end/ajouter_soumissions.php"  >
    <input type="hidden" name="id" value="<?php echo $_SESSION['connect']; ?>" />
        <table class="table table-striped">
            <tr>
                <td>Titre pour le métier :</td>
                <td><input type='text' name='TITRE_ART' size="30" required></td>
            </tr>
            <tr>
                <td>Description :</td>
                <td><input type='text' name='DESCR_ART' required ></td>
            </tr>
            <tr>
                <td>Salaire :</td>
                <td><input type='text' name='SALAIRE_ART' required></td></br>
            </tr>
           <tr>
                <td>Catégorie du métier :</td>
                <td>
                  <?php require('../back_end/parcourirs_categories.php');
                    
                    $Chaine = "";
                    $Select='<select size="1" name="categorie">';
                    // tant qu'il y a des categoriex
                    foreach ($categories as $categorie) {
                        $Chaine = $Chaine."<option value=".$categorie['ID_CAT'].">".$categorie['LIBELLE_CATEG']."</option>";
                    }
                    echo $Select.$Chaine.'</select></br>';
                    ?>
                </td>
            </tr>
            <tr>
                <td width="50%" align="right"></td>
                <td width="50%"></td>
            </tr>
            <tr>
                <td><input type='submit' value='Soumettre' /></td>
            </tr>
        </table>
        <?php
    } ?>


    <!-- Obligatoirement avant la balise de fermeture de l'élément body  -->
    <!-- Intégration de la libraire jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Intégration de la libraire de composants du Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>