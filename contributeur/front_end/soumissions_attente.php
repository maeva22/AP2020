<?php
session_start();
?>

<!DOCTYPE html>
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
    <h6>
    <?php
    if ($_SESSION['connect'] == true) {
      echo 'Bonjour ' . $_SESSION['connect'];
    ?>
    </h6>
    <h3>Liste des soumissions en attente:</h3>
    <table class="table table-striped">
        <thead><tr class="success">
                <td>identifiant</td>
                <td>Titre</td>
                <td>Description</td>
                <td>Date Soumission</td>
                <td>Date Décision</td>
                <td>Contributeur</td>
                <td>Catégorie</td>
            </tr>
        </thead>
        <?php  
        require('../back_end/lister_soumissions_attente.php');
        // tant qu'il y a des lignes à lire
        foreach($metiers as $article) {
        ?>
                <tr>
                <td><?php echo $article['ID_ART']; ?></td>
                <td><?php echo $article['TITRE_ART']; ?></td>
                <td><?php echo $article['DESCR_ART']; ?></td>
                <td><?php echo dateFrancais($article['DATE_PROP_ART']); ?></td>
                <td><?php echo dateFrancais($article['DATE_ACCORD_ART']); ?></td>
                <td><?php echo $article['COURRIEL_UT']; ?></td>
                <td><?php echo $article['LIBELLE_CATEG']; ?></td>
                </tr>
        <?php 
        }
        ?>
    </table>
        <?php
    }
    ?>
    </div>
</div>
</section> 

    <!-- Obligatoirement avant la balise de fermeture de l'élément body  -->
    <!-- Intégration de la libraire jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Intégration de la libraire de composants du Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>     
</body>
</html>
