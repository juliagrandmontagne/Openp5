<?php
class modelcreerutilisateur
{
  public function creeutilisateur()
  {
    require('connexion.php');
    $sth = $bdd->prepare('INSERT INTO utilisateur (PseudoUtilisateur, MailUtilisateur, MpUtilisateur,IDRecette) VALUES(?, ?, ?, ?)');
   $sth->execute(array(htmlspecialchars($_POST['nameuser']), htmlspecialchars($_POST['email']),htmlspecialchars($_POST['mp']),5));   
  header('Location:index.php?action=utilisateur');
  } 

} 
?>