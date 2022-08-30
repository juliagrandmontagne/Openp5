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
        $rereponseq->cloreCursor();
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
