<?php
class modelcreerrecette 
{
  //fonction qui insere les recette dans la base de données
  public function CreeRecette()
  {
    require('connexion.php');
    $name = $_FILES['file']['name'];
    $sth = $bdd->prepare('INSERT INTO recette ( Ingredients, nomrecette, Recette, Images, IDUtilisateur, difficulte, couleur) VALUES(?, ?, ?, ?, ?, ?, ?)');
    $sth->execute(array( htmlspecialchars($_POST['Ingredients']), htmlspecialchars($_POST['titrerecette']), htmlspecialchars($_POST['Recette']), "Images/$name",'1',htmlspecialchars($_POST['difficulte']), '#ffff'));
    header('Location:index.php?action=ProfilUtilisateur&id=1');
  } 
} 
?>