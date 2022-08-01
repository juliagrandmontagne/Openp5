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

      $data = $reponse->fetchAll();
      return $data;
      $rereponseq->cloreCursor();
    }
    //lance la page gestion utilisateur et plus tard recuperera l'id pour afficher les bonnes données
    public function ProfilUtilisateur()
    {
      require('Connexion.php');
    }

}     
?>
