<?php
class modelconnectionutilisateur
{
    public function seconnecter()  
    {
      require('connexion.php');
    }
    public function connexionutilisateur()  
    {
      require('connexion.php');
   $reponse = $bdd->prepare('SELECT * FROM utilisateur WHERE PseudoUtilisateur = ?,	MpUtilisateur = ?');
   $namesaisie = htmlspecialchars($_POST['nameuser']);
   $mpsaisie = htmlspecialchars($_POST['mp']);  
   $reponse->execute( array($namesaisie ,$mpsaisie ));
   $userexist = $reponse->rowcount();
   if($userexist > 0) 
   {
    header('Location:index.php?action=administration');
   }
   else{  echo"vous n'existez pas ";} 
  $data = $reponse->fetchAll();
  return $data;
   $rereponseq->cloreCursor();
    }
    public function connexionadministrateur()  
    {
      require('connexion.php');
   // header('Location:index.php?action=utilisateur');
    }
}     
?>