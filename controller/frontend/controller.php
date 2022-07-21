<?php
//IC= instance de classe
//charge la page accueil
function PageAccueil()
{ 
require('view/frontend/Accueil.php');
}
//charge la page recette debutant
function PageRecetteDebutant()
{ 
require('Model/frontend/Recette.php');
$ICRecetteDebutant = new Recette();
$DataRecetteDeb = $ICRecetteDebutant->RecupereRecetteDebutant();
require('view/frontend/RecetteDifficulter1.php');
}
//charge la page recette intermediaire
function PageRecetteIntermediaire()
{ 
require('Model/frontend/Recette.php');
$ICRecetteIntermediaire = new Recette();
$DataRecetteInt = $ICRecetteIntermediaire->RecupereRecetteIntermediaire();
require('view/frontend/RecetteDifficulter2.php');
}
//charge la page recette confirmer
function PageRecetteConfirmer()
{ 
require('Model/frontend/Recette.php');
$ICRecetteConfirmer = new Recette();
$DataRecetteConf = $ICRecetteConfirmer->RecupereRecetteConfirmer();
require('view/frontend/RecetteDifficulter3.php');
}
//charge la page inscription
function PageInscription()
{ 
require('view/frontend/inscription.php');
}
//lance la page de connexion
function PageLogin()
{ 
require('view/frontend/ConnexionUtilisateur.php');
}
//lance la page gestion utilisateur
function ProfilUtilisateur()
{ 
require('Model/frontend/EspaceGestion.php'); 
$ICUtilisateur = new EspaceGestion();
$DataUtilisateur = $ICUtilisateur->ProfilUtilisateur();
require('view/frontend/GestionUtilisateur.php');
}
//lance la page gestion administratif (moderateur)
function ProfilAdministration()
{ 
require('view/frontend/CompteModerateur.php');
}
//charge la page du recette (sera incrementer methode get pour recuperer la recette intdividuelle)
function PageRecette()
{ 
require('view/frontend/PageRecette.php');
}
//lance la page qui cree l'edition des recettes
function pageCreationEdition()
{ 
require('view/frontend/EditionRecette.php');
}
//lance la page contact
function pageContact()
{ 
require('view/frontend/Contact.php');
}
//lance la fonction qui créé un utilisateur
function CreerUtilisateur()
{ 
require('Model/backend/EspaceGestion.php'); 
$ICCreationUtilisateur = new modelcreerutilisateur();
$DataUtilisateur = $ICCreationUtilisateur->CreeUtilisateur();
require('view/frontend/Inscription.php');
}
//lance la fonction qui redirige la presone sur sont compte (utilisateur ou administrateur)
function SignIn()
{ 
require('Model/frontend/EspaceGestion.php'); 
$instanceseconnecter = new EspaceGestion();
$databdseconnecterutilisateur = $instanceseconnecter->SignIn();
require('view/frontend/ConnexionUtilisateur.php');
}
?>