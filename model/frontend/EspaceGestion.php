<?php
class EspaceGestion
{
  //lance l'action qui trie si lapersonne est un utilisateur moderateur ou intrus
    public function  SignIn()
    {
      require('Connexion.php');
   //$reponse = $bdd->prepare('SELECT * FROM utilisateur WHERE PseudoUtilisateur = ?,	MpUtilisateur = ?');
   //$namesaisie = htmlspecialchars($_POST['nameuser']);
   //$mpsaisie = htmlspecialchars($_POST['mp']);  
   //$reponse->execute( array($namesaisie ,$mpsaisie ));
   //$userexist = $reponse->rowcount();
   //if($userexist > 0) 
   //{
   // header('Location:index.php?action=profilUtilisateur');
   //}
   //else{  echo"vous n'existez pas ";} 
   //$data = $reponse->fetchAll();
   //return $data;
   //$rereponseq->cloreCursor();
   header('Location:index.php?action=profilUtilisateur');
    }
    //lance la page gestion utilisateur et plus tard recuperera l'id pour afficher les bonnes données
    public function ProfilUtilisateur()
    {
      require('Connexion.php');
    }

}     
?>