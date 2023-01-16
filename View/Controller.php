<?php
function SupressionRecette()
{ 
    require('Manager/Backend/EspaceGestionBack.php'); 
    $ICSupRecette = new EspaceGestionBack();
    $DataSupRecette = $ICSupRecette->SupressionRecette();
    require('View/Frontend/GestionUtilisateur.php');
}
function SupressionProfilAdmin ()
{ 
    require('Manager/Backend/EspaceGestionBack.php'); 
    $ICSupRecetteAdmin = new EspaceGestionBack();
    $DataSupRecetteAdmin = $ICSupRecetteAdmin->SupressionProfilAdmin();
    require('View/Frontend/CompteModerateur.php');
}
function SupressionRecetteAdmin ()
{ 
     require('Manager/Backend/EspaceGestionBack.php'); 
     $ICSupprofil = new EspaceGestionBack();
     $DataSupprofil = $ICSupprofil->SupressionRecetteAdmin();
     require('View/Frontend/CompteModerateur.php');
 }
 function  ModifierRecette()
 { 
    require('Manager/Backend/EspaceGestionBack.php'); 
    $ICModifierRecette = new EspaceGestionBack();
    $DataRecette = $ICModifierRecette->ModifierRecette();
    require('View/Frontend/ModifierRecette.php');
}
function  AfficherRecette()
{ 
    require('Manager/Backend/EspaceGestionBack.php'); 
    $ICAfficherRecette= new EspaceGestionBack();
    $DataAfficherRecette = $ICAfficherRecette->AfficherRecette();
    require('View/Frontend/ModifierRecette.php');
}
function EspacePerso()
{ 
    require('Manager/Backend/EspaceGestionBack.php'); 
    $ICEspaceperso= new EspaceGestionBack();
    $DataEspaceperso = $ICEspaceperso->Espaceperso();
    require('View/Frontend/ModifierRecette.php');
}
//function PageCreerAdmin()
//{ 
 //   require('View/Frontend/PageCreationAdministrateur.php');
//}
//function CreerAdministrateur()
//{ 
//    require('View/Frontend/PageCreationAdministrateur.php');
//}
?>