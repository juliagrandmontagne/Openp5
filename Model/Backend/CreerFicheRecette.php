<?php
class modelcreerrecette 
{
  //fonction qui insere les recette dans la base de données
  public function CreeRecette()
  {
    require('Connexion.php');
    $name = $_FILES['file']['name'];
    $sth = $bdd->prepare('INSERT INTO recette ( Ingredients, nomrecette, Recette, Images, IDUtilisateur, difficulte, couleur) VALUES(?, ?, ?, ?, ?, ?, ?)');
    $sth->execute(array( htmlspecialchars($_POST['Ingredients']), htmlspecialchars($_POST['titrerecette']), htmlspecialchars($_POST['Recette']), "Images/$name",htmlspecialchars($_POST['idutilisateur']),htmlspecialchars($_POST['difficulte']), htmlspecialchars($_POST['selectCouleur'])));
    session_start();
    $IdBDD = $_SESSION["id"];;
    echo "<script type='text/javascript'>document.location.replace('index.php?action=ProfilUtilisateur&id=$IdBDD');</script>";
  } 
} 
?>