<?php
class modelcreerrecette 
{
  //fonction qui insere les recette dans la base de données
  public function creerecette()
  {
    require('connexion.php');
    $sth = $bdd->prepare('INSERT INTO recette ( Ingredients, nomrecette, Recette,	difficulte, couleur, IDUtilisateur, image) VALUES(?, ?, ?, ?, ?, ?, ?)');
    $sth->execute(array( htmlspecialchars($_POST['Ingredients']), htmlspecialchars($_POST['titrerecette']), htmlspecialchars($_POST['Recette']), htmlspecialchars($_POST["difficulte"]), htmlspecialchars($_POST['liste']), "1","images"));   
  } 
} 
?>