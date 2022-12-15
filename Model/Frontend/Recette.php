<?php
class Recette
{
    public function RecupereRecetteDebutant()  
    {
        require('Connexion.php');
        
        if(isset($_GET['oh']))
        {
            if($_GET['oh']=="Rhum"){
                echo"Selection Rhum";
                //$reponse = $bdd->prepare('SELECT * FROM recette WHERE Ingredients LIKE '%Rhum%' AND difficulte=1 ');
                //$reponse->execute();
                //$data = $reponse->fetchAll();
                //return $data;
                //$rereponseq->cloreCursor();
            }
            if($_GET['oh']=="Vodka"){
                echo"Selection Vodka";
                //$reponse = $bdd->prepare('SELECT * FROM recette WHERE Ingredients LIKE '%Vodka%' AND difficulte=1 ');
                //$reponse->execute();
                //$data = $reponse->fetchAll();
                //return $data;
                //$rereponseq->cloreCursor();
            }
            if($_GET['oh']=="Whisky"){
                echo"selection Whisky";
                //$reponse = $bdd->prepare('SELECT * FROM recette WHERE Ingredients LIKE '%Whisky' AND difficulte=1 ');
     
            }
            if($_GET['oh']=="Scotch"){
                echo"selection scotch";
                //$reponse = $bdd->prepare('SELECT * FROM recette WHERE Ingredients LIKE '%Scotch%' AND difficulte=1 ');
           
            }
            if($_GET['oh']=="Tequila"){
                  //$reponse = $bdd->prepare('SELECT * FROM recette WHERE Ingredients LIKE '%Tequila%' AND difficulte=1');
                echo"selection tequila";
            }
            if($_GET['oh']=="Champagne"){
                echo"selection champagne";
                // $reponse = $bdd->prepare('SELECT * FROM recette WHERE Ingredients LIKE '%Champagne%' AND difficulte=1');
                //$reponse->execute();
                //$data = $reponse->fetchAll();
                //return $data;
                //$rereponseq->cloreCursor();
                }
            else 
            {  echo"bien essayer ;)!";}
           
        }else
        {
        $reponse = $bdd->prepare('SELECT * FROM recette WHERE  difficulte =1 ');
        $reponse->execute();
        $data = $reponse->fetchAll();
        return $data;
        $rereponseq->cloreCursor();}
    }
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
}     
?>
