<?php
class EspaceGestion
{
  //lance l'action qui trie le profil de la personne voulant ce connecter et la redirige
    public function  SignIn()
    {
      require('Connexion.php');
      //ectraction et verification
      $reponse = $bdd->prepare('SELECT * FROM utilisateur WHERE PseudoUtilisateur = ? and	MpUtilisateur = ?');
      $namesaisie = htmlspecialchars($_POST['nameuser']);
      $mpsaisie = htmlspecialchars($_POST['mp']);
      //on crypte la saisie utilisateur pour comparer
      $mpsaisie2= hash('ripemd160', $mpsaisie);
      //on initialise la valeur administrateur a 0
      $adm = 0;
      $reponse->execute( array($namesaisie ,$mpsaisie2 ));
      //recuperation de ID 
      foreach ($reponse as $row) {
        print_r($row);
        $ID = $row[IDUtilisateur];
        //POUR UNE RAISON QUE J4IGNORE JE N ARRIVE PAS A UTILISIER LA METHODE GET AVEC LES HEADERLOCATION DONC JUTILISE LES SESSION POUR TRANSFERE LA VALEUR
        session_start(); 
        $_SESSION['ID'] = $ID;
        echo$ID;
  
      $userexist = $reponse->rowcount();
      //si corepondence des nom utilisateur et mot de passe
      
      if($userexist > 0) 
        {
          //requete pour verifier si administrateur ou utilisateur (vu que on sais deja que la personneest dans la bd)
          $reponseB = $bdd->prepare('SELECT * FROM utilisateur WHERE PseudoUtilisateur = ? and	MpUtilisateur = ? and Administrateur = ?');
          //sion as une corespondence avec un 0 (voir l 13) alors rowcount prend la pvaleur de `1 et la page utilisateur est rediriger 
          $reponseB->execute( array($namesaisie ,$mpsaisie2, $adm ));
          $verifielestatu = $reponseB->rowcount();
          if( $verifielestatu > 0)
          {
            header('Location:index.php?action=ProfilUtilisateur');
          }
          //si pas de corespondence par eliminattion c'est un profil admin
          else{
            header('Location:index.php?action=PageAdministration');
          }
        }
      else
        { 
          echo"vous n'existez pas ";
        }
          }
      //$data = $reponse->fetch(PDO::FETCH_ASSOC);;
      return $data;
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
      //GENERE UN BUG SI J ESSAI DE L4ENREGISTRER DANS UNE VARIABLE
      //$ID = $_SESSION['ID'];
      //echo $ID
      //BUG INDEPENDAMENT DE LA VALEUR
      //$reponse = $bdd->prepare('SELECT * FROM recette WHERE IDUtilisateur='$_SESSION['ID']);
      //$reponse->execute();
      //$data = $reponse->fetchAll();
      //return $data;
      //$rereponseq->cloreCursor();
    }
    public function ProfilAdministrateur()
    {
      require('Connexion.php');
      session_start ();
      echo ($_SESSION['ID']);
      echo "coucou";
     // $reponse = $bdd->prepare('SELECT * FROM recette WHERE IDUtilisateur=1');
      //$reponse->execute();
      //$data = $reponse->fetchAll();
      //return $data;
      //$rereponseq->cloreCursor();
    }
}     
?>
