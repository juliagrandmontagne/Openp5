<?php
class modelcreerrecette 
{
  //fonction qui insere les recette dans la base de données
  public function creerecette()
  {
    require('connexion.php');
    $sth = $bdd->prepare('INSERT INTO Recette (Ingrédients, NomRecette , Recette,	Difficulte ,couleur ,images) VALUES(?, ?, ?, ?, ?)');
    $sth->execute(array(htmlspecialchars($_POST['Ingredients']), htmlspecialchars($_POST['titrerecette']),htmlspecialchars($_POST['Recette']),htmlspecialchars($_POST['liste']), htmlspecialchars($_POST["difficulte"]),"images"));   
  } 
} 
?>