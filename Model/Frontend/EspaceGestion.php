<?php
class EspaceGestion
{
  //lance l'action qui trie le profil de la personne voulant ce connecter et la redirige
    public function  SignIn()
    {
      require('Connexion.php');
      //ectraction et verification
      $reponse = $bdd->prepare('SELECT * FROM utilisateur');
      $reponse->execute();
      return $reponse;
      $rereponseq->cloreCursor();
    }
    //lance la page gestion utilisateur et plus tard recuperera l'id pour afficher les bonnes données
    public function ProfilUtilisateur()
    {
      require('Connexion.php');
      $reponse = $bdd->prepare('SELECT * FROM recette WHERE IDUtilisateur =' . $_GET["id"]);
      $reponse->execute();
      return $reponse;
      $rereponseq->cloreCursor();
    }
    public function Entete()
    {
      require('Connexion.php');
      $reponse = $bdd->prepare('SELECT * FROM utilisateur WHERE IDUtilisateur =' . $_GET["id"]);
      $reponse->execute();
      return $reponse;
      $rereponseq->cloreCursor();
    }
    public function ProfilAdministrateur()
    {
      require('Connexion.php');
    }
    
}     
?>
