<?php
class modelconnectionutilisateur
{
    public function seconnecter()  
    {
      require('connexion.php');
      $search='SELECT * FROM recettes WHERE IDUtilisateur=' . $_GET["id"];
      $reponse = $bdd->prepare($search);
      $reponse->execute();
              $data = $reponse->fetchAll();
              return $data;
              $rereponseq->cloreCursor();
    }
    public function connexionutilisateur()  
    {
      require('connexion.php');
   // header('Location:index.php?action=utilisateur');

    }
    public function connexionadministrateur()  
    {
      require('connexion.php');
   // header('Location:index.php?action=utilisateur');
    }
}     
?>