<?php
class Retour
{
    public function boutonretour()
    {
        require('Connexion.php');
        session_destroy ();
        header('Location:index.php?action=PageRecetteDebutant');
    }
}
?>