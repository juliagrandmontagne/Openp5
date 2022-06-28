<?php
class modelrecette
{
    public function connexionbdrecetted1()  
    {
        require('connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM recette WHERE difficulte =1');
        $reponse->execute();
        $data = $reponse->fetchAll();
       return $data;
        $rereponseq->cloreCursor();
    }
    public function connexionbdrecetted2()  
    {
       // require('connexion.php');
      //  $reponse = $bdd->prepare('SELECT * FROM recette WHERE difficulte =2');
       // $reponse->execute();
       //         $data = $reponse->fetchAll();
      //          return $data;
      //          $rereponseq->cloreCursor()
    }
    public function connexionbdrecetted3()  
    {
     //   require('connexion.php');
    //    $reponse = $bdd->prepare('SELECT * FROM recette WHERE difficulte =3');
    //    $reponse->execute();
    //            $data = $reponse->fetchAll();
     //           return $data;
     //           $rereponseq->cloreCursor()
    }
}     
?>
