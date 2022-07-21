<?php
//IC= instance de classe
//charge la page accueil
function PageAccueil()
{ 
    require('View/Frontend/Accueil.php');
}
//charge la page recette debutant
function PageRecetteDebutant()
{ 
    require('Model/Frontend/Recette.php');
    $ICRecetteDebutant = new Recette();
    $DataRecetteDeb = $ICRecetteDebutant->RecupereRecetteDebutant();
    require('View/Frontend/RecetteDifficulter1.php');
}
//charge la page recette intermediaire
function PageRecetteIntermediaire()
{ 
    require('Model/Frontend/Recette.php');
    $ICRecetteIntermediaire = new Recette();
    $DataRecetteInt = $ICRecetteIntermediaire->RecupereRecetteIntermediaire();
    require('View/Frontend/RecetteDifficulter2.php');
}
//charge la page recette confirmer
function PageRecetteConfirmer()
{ 
    require('Model/Frontend/Recette.php');
    $ICRecetteConfirmer = new Recette();
    $DataRecetteConf = $ICRecetteConfirmer->RecupereRecetteConfirmer();
    require('View/Frontend/RecetteDifficulter3.php');
}
//charge la page inscription
function PageInscription()
{ 
    require('View/Frontend/Inscription.php');
}
//lance la page de connexion
function PageLogin()
{ 
    require('View/Frontend/ConnexionUtilisateur.php');
}
//lance la page gestion utilisateur
function ProfilUtilisateur()
{ 
    require('Model/Frontend/EspaceGestion.php'); 
    $ICUtilisateur = new EspaceGestion();
    $DataUtilisateur = $ICUtilisateur->ProfilUtilisateur();
    require('View/Frontend/GestionUtilisateur.php');
}
//lance la page gestion administratif (moderateur)
function ProfilAdministration()
{ 
    require('View/Frontend/CompteModerateur.php');
}
//charge la page du recette (sera incrementer methode get pour recuperer la recette intdividuelle)
function PageRecette()
{ 
    require('View/Frontend/PageRecette.php');
}
//lance la page qui cree l'edition des recettes
function pageCreationEdition()
{ 
    require('View/Frontend/EditionRecette.php');
}
//lance la page contact
function pageContact()
{ 
    require('View/Frontend/Contact.php');
}
//lance la fonction qui créé un utilisateur
function CreerUtilisateur()
{ 
    require('Model/Backend/EspaceGestion.php'); 
    $ICCreationUtilisateur = new modelcreerutilisateur();
    $DataUtilisateur = $ICCreationUtilisateur->CreeUtilisateur();
    require('View/Frontend/Inscription.php');
}
//lance la fonction qui redirige la presone sur sont compte (utilisateur ou administrateur)
function SignIn()
{ 
    require('Model/Frontend/EspaceGestion.php'); 
    $instanceseconnecter = new EspaceGestion();
    $databdseconnecterutilisateur = $instanceseconnecter->SignIn();
    require('View/Frontend/ConnexionUtilisateur.php');
}
?>