<?php
class Retour
{
    public function boutonretour()
    {
        require('Connexion.php');
       // session_destroy ();
        header('Location:index.php?action=RecetteToutNiveau');
    }
    public function deconnection()
    {
        require('Connexion.php');
       // session_destroy ();
       // session_unset(): connecter;
        header('Location:index.php?action=PageAccueil');
    }
}
?>