<?php
class EspaceGestionBack
{
    public function SupressionRecette()
    {
      require('Connexion.php');
      $reponse = $bdd->prepare('DELETE FROM recette WHERE ID=?');
      $reponse->execute(array(htmlspecialchars($_POST['ID'])));
      return $reponse; 
      $rereponseq->cloreCursor();
      header('Location:index.php?action=ProfilUtilisateur&id=1');
      //print("coucou");
    }
    public function Entete()
    {
      require('Connexion.php');
      $reponse = $bdd->prepare('SELECT * FROM recette WHERE IDUtilisateur =' . $_GET["id"]);
      $reponse->execute();
      return $reponse;
      $rereponseq->cloreCursor();
    }
    public function SupressionRecetteAdmin()
    {
      require('Connexion.php');
      $reponse = $bdd->prepare('DELETE FROM recette WHERE ID=?');
      $reponse->execute(array(htmlspecialchars($_POST['ID'])));
      return $reponse; 
      $rereponseq->cloreCursor();
      header('Location:index.php?action=ProfilUtilisateur&id=1');
      print("coucou");
    }
    public function SupressionProfilAdmin()
    {
      //luiestpasrelier
      //require('Connexion.php');
     // $reponse = $bdd->prepare('DELETE FROM utilisateur WHERE IDUtilisateur=?');
     // $reponse->execute(array(htmlspecialchars($_POST['IDUtilisateur'])));
     // return $reponse; 
     // $rereponseq->cloreCursor();
      //header('Location:index.php?action=ProfilUtilisateur&id=1');
      print("coucou");
    }
}     
?>
