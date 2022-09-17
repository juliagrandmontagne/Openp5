<?php
class Retour
{
    public function boutonretour()
    {
        require('Connexion.php');
        header('Location:index.php?action=PageRecetteDebutant');
    }
}
?>