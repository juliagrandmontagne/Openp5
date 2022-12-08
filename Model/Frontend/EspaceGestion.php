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
      session_start();
      $_SESSION['utilisateur'] = $_GET["id"];
      $reponse->execute();
      return $reponse;
      $rereponseq->cloreCursor();
    }
    public function Searchbar()
    {
      session_start();
      require('Connexion.php');
    //  if(isset($_GET['q']) AND !empty($_GET['q'])){
      //  ?/>
       // <//p>'alocooool'<///p><?php
        //$recherche = htmlspecialchars($_GET['q']);
        $reponse = $bdd->prepare('SELECT * FROM recette WHERE nomrecette="Mojito" AND IDUtilisateur=1');
     // }

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
      $reponse = $bdd->prepare('SELECT * FROM recette');
      $reponse->execute();
      return $reponse;
      $rereponseq->cloreCursor();
    }
    public function ProfilAdministrateurutilisateur()
    {
      require('Connexion.php');
      $reponse = $bdd->prepare('SELECT * FROM utilisateur');
      $reponse->execute();
      return $reponse;
      $rereponseq->cloreCursor();
    }   
}     
?>
