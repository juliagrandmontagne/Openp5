<?php
class EspaceGestionback
{

    public function SupressionRecette()
    {
      require('Connexion.php');
      $reponse = $bdd->prepare('DELETE FROM recette WHERE ID=?');
      $reponse->execute(array(htmlspecialchars($_POST['ID'])));
      return $reponse; 
      $rereponseq->cloreCursor();
      header('Location:index.php?action=PageAccueil');
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
