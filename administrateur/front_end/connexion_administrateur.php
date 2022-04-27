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
include("../templates/navbar.php");
?>

<div class="container">
    <div class="col-md-6 col-md-offset-3"> 
        <div class="form-area">  
            <form action="../back_end/connexion.php" method="post">
            <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Connexion administrateur</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="COURRIEL_UT" name="COURRIEL_UT" placeholder="Entrer votre adresse email" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="MDP_UT" name="MDP_UT" placeholder="Entrer le mot de passe" required>
					</div>
					
                    <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Connexion</button>
                    <!--erreur connexion-->
            </form>
        </div>
    </div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>