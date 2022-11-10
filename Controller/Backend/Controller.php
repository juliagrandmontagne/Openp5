<?php
function SupressionRecette()
{ 
    require('Model/Backend/EspaceGestion.php'); 
    $ICSupRecette = new EspaceGestionback();
    $DataSupRecette = $ICSupRecette->SupressionRecette();
    require('View/Frontend/GestionUtilisateur.php');
}
function SupressionProfilAdmin()
{ 
    require('Model/Backend/EspaceGestion.php'); 
    $ICSupRecetteAdmin = new EspaceGestionback();
    $DataSupRecetteAdmin = $ICSupRecette->SupressionProfilAdmini();
    require('View/Frontend/CompteModerateur.php');
}
function SupressionRecetteAdmin()
{ 
     require('Model/Backend/EspaceGestion.php'); 
     $ICSupprofil = new EspaceGestionback();
     $DataSupprofil = $ICSupprofil->SupressionRecetteAdmini();
     require('View/Frontend/CompteModerateur.php');
 }
?>