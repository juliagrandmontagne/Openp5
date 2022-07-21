<?php
class modelcreerutilisateur
{
//lance la creation d'un utilisateur
  public function CreeUtilisateur()
  {
    require('connexion.php');
    $sth = $bdd->prepare('INSERT INTO utilisateur (PseudoUtilisateur, MailUtilisateur, MpUtilisateur,IDRecette,Administrateur) VALUES(?, ?, ?,?, ?)');
    $sth->execute(array(htmlspecialchars($_POST['nameuser']), htmlspecialchars($_POST['email']),htmlspecialchars($_POST['mp']),5,0));   
    header('Location:index.php?action=utilisateur');
  } 
} 
?>