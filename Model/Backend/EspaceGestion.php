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
    public function SupressionRecetteAdmini()
    {
      require('Connexion.php');
    //  $reponse = $bdd->prepare('DELETE FROM recette WHERE ID=?');
    //  $reponse->execute(array(htmlspecialchars($_POST['ID'])));
    //  return $reponse; 
    //  $rereponseq->cloreCursor();
      header('Location:index.php?action=PageAdministration');
    }
    public function SupressionProfilAdmini()
    {
      require('Connexion.php');
     // $reponse = $bdd->prepare('DELETE FROM utilisateur WHERE IDUtilisateur=?');
     // $reponse->execute(array(htmlspecialchars($_POST['IDUtilisateur'])));
     // return $reponse; 
     // $rereponseq->cloreCursor();
      header('Location:index.php?action=PageAdministration');
    }
}     
?>
