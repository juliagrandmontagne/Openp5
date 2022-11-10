<?php
class modelcreerrecette 
{
  //fonction qui insere les recette dans la base de données
  public function CreeRecette()
  {
    require('connexion.php');
    $sth = $bdd->prepare('INSERT INTO recette ( Ingredients, nomrecette, Recette,	difficulte, couleur, IDUtilisateur, Images) VALUES(?, ?, ?, ?, ?, ?, ?)');
    $sth->execute(array( "tot", "tot", "toto", "toto", "#ffff", "1","images"));  
    header('Location:index.php?action=ProfilUtilisateur&id=1'); 
  } 
} 
?>