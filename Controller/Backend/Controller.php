<?php
function SupressionRecette()
{ 
    require('Model/Backend/EspaceGestion.php'); 
    $ICSupRecette = new EspaceGestionback();
    $DataSupRecette = $ICSupRecette->SupressionRecette();
    require('View/Frontend/GestionUtilisateur.php');
}
function EditionRecette()
{ 
    require('Model/Backend/EspaceGestion.php'); 
    $ICEditiRecette = new EspaceGestionback();
    $DataEditiRecette = $ICEditiRecette->EditionRecette();
    require('View/Frontend/GestionUtilisateur.php');
}


?>