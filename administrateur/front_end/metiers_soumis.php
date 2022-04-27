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
    include("../templates/navbar_admin.php");
?>

<section  id="competences">
<div class="competences container">
    <div id=contenu>

   <?php
    if ($_SESSION['connect'] == true) {
      echo 'Bonjour ' . $_SESSION['connect'];
    ?>
    </h6>

    <h2>Présentation de métiers soumis par des contributeurs</h2>
    <p>Vous pouvez accepter ou refuser chaque article soumis par des contributeurs</p>

    <div class="new_pages">
        <form action="../back_end/page_updates/page_update.php" method="post">
            <table>
                <thead>
                    <tr>
                        <td>Identifiant</td>
                        <td>Titre</td>
                        <td>Description</td>
                        <td>Date soumission</td>
                        <td>Contributeur</td>
                        <td>Catégorie</td>
                        <td>Choix</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("../back_end/new_sites.php");
                    foreach ($result as $new_sites) {
                        if ($new_sites['STATUS_ART'] == 'P') {

                    ?>
                            <tr>
                                <td><?php echo $new_sites['ID_ART']; ?></td>
                                <td><?php echo $new_sites['TITRE_ART']; ?></td>
                                <td><?php echo $new_sites['DESCR_ART']; ?></td>
                                <td><?php echo $new_sites['DATE_PROP_ART']; ?></td>
                                <td><?php echo $new_sites['ID_CONT']; ?></td>
                                <td><?php echo $new_sites['LIBELLE_CATEG']; ?></td>
                                <td><select name="option_<?php echo $new_sites['ID_ART'] ?>">
                                        <option value="P">Non défini</option>
                                        <option value="A">Accepter</option>
                                        <option value="R">Refuser</option>
                                        <option value="D">Mettre en attente</option>
                                        <p><input type="submit" value="Envoyer"></p>
                                    </select></td>
                        <?php
                        }
                    }  ?>

                            </tr>

                </tbody>
            </table>
        </form>
    </div>
    <?php
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