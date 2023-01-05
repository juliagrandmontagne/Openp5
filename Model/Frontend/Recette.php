<?php
class Recette
{
    public function RecupereRecetteDebutant()  
    {
        require('Connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM recette WHERE difficulte =1');
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}
    
    //}
    public function RecupereRecetteIntermediaire()  
    {
        require('Connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM recette WHERE difficulte =2');
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();
    }
    public function RecupereRecetteConfirmer()  
    {
        require('Connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM recette WHERE difficulte =3');
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();
    }
    public function RecupereRecette ()
    {
        require('Connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM recette WHERE ID =' . $_GET["id"]);
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();
    }
    public function RecupereRecetteTousNiveau()
    {
        require('Connexion.php');
        $reponse = $bdd->prepare('SELECT * FROM recette');
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();
    }
    public function TrieRecette()
    {
        require('Connexion.php');
        if($_GET['oh']=="Rhum"){ 

            $alcool="Rhum";    
        }
        else if($_GET['oh']=="Vodka"){
            $alcool="Vodka";}
        else if($_GET['oh']=="Whisky"){ $alcool="Whisky";}
        else if($_GET['oh']=="Scotch"){$alcool="Scotch";}
        else if($_GET['oh']=="Tequila"){$alcool="Tequila";}
        else if($_GET['oh']=="Champagne"){ $alcool="Champagne"; }
        else 
           {  echo" bien essayer ;)!";}
          
        $reponse = $bdd->prepare("SELECT * FROM recette WHERE Ingredients LIKE '%$alcool%'");
        $reponse->execute();
       $data = $reponse->fetchAll();
                return $data;
             $rereponseq->cloreCursor();
 
    }
}     

?>
