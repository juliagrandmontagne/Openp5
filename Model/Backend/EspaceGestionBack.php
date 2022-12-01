<?php
class EspaceGestionBack
{
    public function SupressionRecette()
    {
      require('Connexion.php');
      $reponse = $bdd->prepare('DELETE FROM recette WHERE ID=?');
      $reponse->execute(array(htmlspecialchars($_POST['ID'])));
      //return $reponse; 
      //$rereponseq->cloreCursor();
      session_start();
     $IdBDD = $_SESSION["id"];
      echo "<script type='text/javascript'>document.location.replace('index.php?action=ProfilUtilisateur&id=$IdBDD');</script>";
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
      //return $reponse; 
      //$rereponseq->cloreCursor();
      echo "<script type='text/javascript'>document.location.replace('index.php?action=PageAdministration');</script>";
      header('Location:index.php?action=ProfilUtilisateur&id=1');
      print("coucou");
    }
    public function SupressionProfilAdmin()
    {
      require('Connexion.php');
      $reponse = $bdd->prepare('DELETE FROM utilisateur WHERE IDUtilisateur=?');
     $reponse->execute(array(htmlspecialchars($_POST['IDUtilisateur'])));
      //return $reponse; 
      //$rereponseq->cloreCursor();
      echo "<script type='text/javascript'>document.location.replace('index.php?action=PageAdministration');</script>";
      //header('Location:index.php?action=PageAdministration');
    }
    public function ModifierRecette() 
    {
      require('Connexion.php');
      //$reponse = $bdd->prepare('UPDATE recette SET  chapitrenumber=?, nomrecette=?, Recette=?,brouillon=? ,Images=? ,difficulte=? ,couleur=? WHERE ID=?');
      //$reponse->execute(array(, htmlspecialchars($_POST['Ingredients']), htmlspecialchars($_POST['titrerecette']), htmlspecialchars($_POST['Recette']), "Images/$name",htmlspecialchars($_POST['idutilisateur']),htmlspecialchars($_POST['difficulte']), '#ffff',htmlspecialchars($_POST['ID'])));
      //return $reponse; 
      //$rereponseq->cloreCursor();
      //$IdBDD = $_SESSION["id"];
      //echo "<script type='text/javascript'>document.location.replace('index.php?action=ProfilUtilisateur&id=$IdBDD');</script>";
      //echo "<script type='text/javascript'>document.location.replace('index.php?action=PageAdministration');</script>";
      //header('Location:index.php?action=ProfilUtilisateur&id=1');
      //print("coucou");
    }
    public function AfficherRecette()
    {
      require('Connexion.php');
      $search='SELECT * FROM recette WHERE  ID=' . $_GET["id"];
      $reponse = $bdd->prepare($search);
      $reponse->execute();
      $data = $reponse->fetchAll();
      return $data;
      $rereponseq->cloreCursor();
    }
}     
?>
