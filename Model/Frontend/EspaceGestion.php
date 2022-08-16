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
      session_start ();
      //JE TESTE ET ON ARRIVE BIEN A RECUPERE LA VALEUR
      echo ($_SESSION['ID']);
      echo "coucou";
      echo gettype($_SESSION['ID']), "\n";
      $temp = (int)$_SESSION['ID'];
      $tempé = $_SESSION['ID'];
      echo"$tempé";
      echo"$temp";

      //GENERE UN BUG SI J ESSAI DE L4ENREGISTRER DANS UNE VARIABLE
      $IDDDDDDDD = $_SESSION['ID'];
      //BUG INDEPENDAMENT DE LA VALEUR
      $reponse = $bdd->prepare('SELECT * FROM recette WHERE IDUtilisateur =' . $_GET["id"]);
      $reponse->execute();
      return $data;
      $rereponseq->cloreCursor();
    }
    public function ProfilAdministrateur()
    {
      require('Connexion.php');


    }
}     
?>
