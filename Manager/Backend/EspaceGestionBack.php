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
      echo "<script type='text/javascript'>document.location.replace('index.php?action=PageAdministration');</script>";
    }
    public function SupressionProfilAdmin()
    {
      require('Connexion.php');
      $reponse = $bdd->prepare('DELETE FROM recette WHERE IDUtilisateur=?');
      $reponse->execute(array(htmlspecialchars($_POST['IDUtilisateur'])));
      $reponse = $bdd->prepare('DELETE FROM utilisateur WHERE IDUtilisateur=?');
     $reponse->execute(array(htmlspecialchars($_POST['IDUtilisateur'])));
     echo "<script type='text/javascript'>document.location.replace('index.php?action=PageAdministration');</script>";
    }

    public function ModifierRecette() 
    {
      require('Connexion.php');
      $name = $_FILES['file']['name'];
      $reponse = $bdd->prepare('UPDATE recette SET  Ingredients=?, nomrecette=?, Recette=?, Images=?, difficulte=?, couleur=?  WHERE ID=?');
      $reponse->execute(array( htmlspecialchars($_POST['Ingredients']), htmlspecialchars($_POST['titrerecette']), htmlspecialchars($_POST['Recette']), "Images/$name",htmlspecialchars($_POST['difficulte']), htmlspecialchars($_POST['selectCouleur']),htmlspecialchars($_POST['ID']))); 
      return $reponse; 
      $rereponseq->cloreCursor();
      session_start();
      $IdBDD = $_SESSION["id"];
      echo "<script type='text/javascript'>document.location.replace('index.php?action=ProfilUtilisateur&id=$IdBDD');</script>";
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
    public function Espaceperso()
    {
      require('Connexion.php');
      session_start();
      $IdBDD = $_SESSION["id"];
      if (isset($IdBDD))
      {
        echo "<script type='text/javascript'>document.location.replace('index.php?action=ProfilUtilisateur&id=$IdBDD');</script>";
       } 
        else  {
          echo "<script type='text/javascript'>document.location.replace('index.php?action=PageAdministration');</script>";
       } 
       
    }
    public function CreerAdministrateur()
    {
      require('Connexion.php');
      $mp = hash('ripemd160', $_POST['mp']);
      $sth = $bdd->prepare('INSERT INTO utilisateur (PseudoUtilisateur, MailUtilisateur, MpUtilisateur, Administrateur) VALUES(?, ?, ?, ?)');
      $sth->execute(array(htmlspecialchars($_POST['nameuser']), htmlspecialchars($_POST['email']), $mp,1));
      header('Location:index.php?action=SignIn');
    }
}     
?>
