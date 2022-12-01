<?php
function SupressionRecette()
{ 
    require('Model/Backend/EspaceGestionBack.php'); 
    $ICSupRecette = new EspaceGestionBack();
    $DataSupRecette = $ICSupRecette->SupressionRecette();
    require('View/Frontend/GestionUtilisateur.php');
}
function SupressionProfilAdmin ()
{ 
    require('Model/Backend/EspaceGestionBack.php'); 
    $ICSupRecetteAdmin = new EspaceGestionBack();
    $DataSupRecetteAdmin = $ICSupRecetteAdmin->SupressionProfilAdmin();
    require('View/Frontend/CompteModerateur.php');
}
function SupressionRecetteAdmin ()
{ 
     require('Model/Backend/EspaceGestionBack.php'); 
     $ICSupprofil = new EspaceGestionBack();
     $DataSupprofil = $ICSupprofil->SupressionRecetteAdmin();
     require('View/Frontend/CompteModerateur.php');
 }
 function  ModifierRecette()
 { 
    require('Model/Backend/EspaceGestionBack.php'); 
    $ICModifierRecette = new EspaceGestionBack();
    $DataRecette = $ICModifierRecette->ModifierRecette();
    require('View/Frontend/ModifierRecette.php');
}
function  AfficherRecette()
{ 
    require('Model/Backend/EspaceGestionBack.php'); 
    $ICAfficherRecette= new EspaceGestionBack();
    $DataAfficherRecette = $ICAfficherRecette->AfficherRecette();
    require('View/Frontend/ModifierRecette.php');
}

?>