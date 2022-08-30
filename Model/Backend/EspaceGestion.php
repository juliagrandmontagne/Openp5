<?php
class EspaceGestionback
{

    public function SupressionRecette()
    {
      header("Location:index.php?action=PageAccueil");
      require('Connexion.php');
    }
    public function EditionRecette()
    {


    }
    public function Entete()
    {
      require('Connexion.php');
      $reponse = $bdd->prepare('SELECT * FROM recette WHERE IDUtilisateur =' . $_GET["id"]);
      $reponse->execute();
      return $reponse;
      $rereponseq->cloreCursor();
    }
}     
?>
