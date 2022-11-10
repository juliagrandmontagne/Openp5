<?php
class modelcreerrecette 
{
  //fonction qui insere les recette dans la base de données
  public function CreeRecette()
  {
    require('connexion.php');
    $sth = $bdd->prepare('INSERT INTO recette ( Ingredients, nomrecette, Recette,	difficulte, couleur, IDUtilisateur, Images) VALUES(?, ?, ?, ?, ?, ?, ?)');
    $sth->execute(array( htmlspecialchars($_POST['Ingredients']), htmlspecialchars($_POST['titrerecette']), htmlspecialchars($_POST['Recette']), htmlspecialchars($_POST["difficulte"]), "#ffff", "1","images"));  
    header('Location:index.php?action=ProfilUtilisateur&id=1'); 
  } 
} 
?>