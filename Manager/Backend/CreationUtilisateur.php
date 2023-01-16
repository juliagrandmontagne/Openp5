<?php
class Managercreerutilisateur
{
//lance la creation d'un utilisateur
  public function CreeUtilisateur()
  {
    require('Connexion.php');
    $mp = hash('ripemd160', $_POST['mp']);
    $sth = $bdd->prepare('INSERT INTO utilisateur (PseudoUtilisateur, MailUtilisateur, MpUtilisateur, Administrateur) VALUES(?, ?, ?, ?)');
    $sth->execute(array(htmlspecialchars($_POST['nameuser']), htmlspecialchars($_POST['email']), $mp,0));
    header('Location:index.php?action=SignIn');
  } 
} 
?>