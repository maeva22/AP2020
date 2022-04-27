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
        <h2>Accueil</h2>
        <h4>Bienvenue dans l'espace contributeur. </h4></br></br>
       
        <?php
    } else { ?>
        <h2>Erreur</h2>
        <p>Mot de passe incorrect (attention au majuscule/minuscule).</p>
        
        <?php
        require('../back_end/authorisation_connexion.php');
    } ?>
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