<?php
session_start();
$bdd= new PDO("mysql:host=localhost;dbname=admin","root","");

$requete = $bdd->prepare('SELECT * FROM article');
$requete->execute();
$lignes = $requete->fetchAll();

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><h2><span>B</span>TS SIO</h2></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav lienMetier">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Developement
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <?php foreach($lignes as $arts) {
                  if($arts['ID_CAT']==2){
                  $_SESSION['art']=$arts;
                  ?>
                     <a class  ="dropdown-item" href="<?php echo "metier.php?ida=".$_SESSION['art']['ID_ART']; ?>"><?php echo $arts['TITRE_ART'];?></p></a>
                  <?php }}?>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Reseau
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               
                <?php foreach($lignes as $arts) {
                 if($arts['ID_CAT']==1){
                  $_SESSION['art']=$arts;

                  ?>  
                  <a class  ="dropdown-item" href="<?php echo "metier.php?ida=".$_SESSION['art']['ID_ART']; ?>"><?php echo $arts['TITRE_ART'];?></p></a>
                  
                  <?php }}?>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav">           
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cyber-Sécurité
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <?php foreach($lignes as $arts) {
                  if($arts['ID_CAT']==3){
                  $_SESSION['art']=$arts;
                  ?>
                  <a class  ="dropdown-item" href="<?php echo "metier.php?ida=".$_SESSION['art']['ID_ART']; ?>"><?php echo $arts['TITRE_ART'];?></p></a>
                  <?php }}?>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav">    
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Autres
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <?php foreach($lignes as $arts) {
                  if($arts['ID_CAT']==4){
                  $_SESSION['art']=$arts;
                  ?>
                
                  <a class  ="dropdown-item" href="<?php echo "metier.php?ida=".$_SESSION['art']['ID_ART']; ?>"><?php echo $arts['TITRE_ART'];?></p></a>
                  <?php }}?>
                </div>
              </li>
            </ul>
            <a class="nav-link" href="../contributeur/front_end/connexion_contributeur.php">Contributeur</a>
            <a class="nav-link" href="../administrateur/front_end/onnexion_administrateur.php">Administrateurs</a>
        </div>
    </div>
</nav>