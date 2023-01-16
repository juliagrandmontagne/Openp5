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
    require('Manager/Frontend/Recette.php');
    $ICRecetteDebutant = new Recette();
    $DataRecetteDeb = $ICRecetteDebutant->RecupereRecetteDebutant();
    require('View/Frontend/RecetteDifficulter1.php');
}
//charge la page recette intermediaire
function PageRecetteIntermediaire()
{ 
    require('Manager/Frontend/Recette.php');
    $ICRecetteIntermediaire = new Recette();
    $DataRecetteInt = $ICRecetteIntermediaire->RecupereRecetteIntermediaire();
    require('View/Frontend/RecetteDifficulter2.php');
}
//charge la page recette confirmer
function PageRecetteConfirmer()
{ 
    require('Manager/Frontend/Recette.php');
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
    require('Manager/Frontend/EspaceGestion.php'); 
    $ICUtilisateur = new EspaceGestion();
    $DataUtilisateur = $ICUtilisateur->ProfilUtilisateur();
    //$DataUtilisateurperso = $ICUtilisateur-> Searchbar();
    require('View/Frontend/GestionUtilisateur.php');

}
function Searchbar()
{ 
    require('Manager/Frontend/EspaceGestion.php'); 
    $ICsearch = new EspaceGestion();
    $DataUtilisateurperso = $ICsearch-> Searchbar();
    require('View/Frontend/GestionUtilisateur.php');
}
//lance la page gestion administratif (moderateur)
function ProfilAdministration()
{ 
    require('Manager/Frontend/EspaceGestion.php'); 
    $ICAdministrateur = new EspaceGestion();
    $DataAdministrateur= $ICAdministrateur->ProfilAdministrateur();
    $DataAdministrateurutilisateur= $ICAdministrateur->ProfilAdministrateurutilisateur();
    require('View/Frontend/CompteModerateur.php');
}
//charge la page du recette (sera incrementer methode get pour recuperer la recette intdividuelle)
function PageRecette()
{ 
    require('Manager/Frontend/Recette.php');    
    $ICPagerecette = new Recette();
    $DataPagerecette= $ICPagerecette->RecupereRecette ();
    require('View/Frontend/PageRecette.php');
}
//lance la page qui cree l'edition des recettes
function pageCreationEdition()
{ 
    require('View/Frontend/EditionRecette.php');
}
function Creationrecette()
{ 
    require('Manager/Backend/CreerFicheRecette.php');
    $ICCreationRecette = new Managercreerrecette();
    $DataCreeRecette = $ICCreationRecette->CreeRecette();
    require('View/Frontend/EditionRecette.php');
}
function EditionRecette()
{ 
    require('Manager/Backend/CreerFicheRecette.php');
    $ICCreationRecette = new Managercreerrecette();
    $DataCreeRecette = $ICCreationRecette->CreeRecette();
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
    require('Manager/Backend/CreationUtilisateur.php'); 
    $ICCreationUtilisateur = new Managercreerutilisateur();
    $DataCreeUtilisateur = $ICCreationUtilisateur->CreeUtilisateur();
    require('View/Frontend/Inscription.php');
}
//lance la fonction qui redirige la presone sur sont compte (utilisateur ou administrateur)
function SignIn()
{ 
    require('Manager/Frontend/EspaceGestion.php'); 
    $ICConnecter = new EspaceGestion();
    $DataConnecter = $ICConnecter->SignIn();
    require('View/Frontend/ConnexionUtilisateur.php');
}
function boutonretour()
{ 
    require('Manager/Frontend/Retour.php'); 
    $ICRetour = new Retour();
    $DataRetour = $ICRetour->BoutonRetour();
    require('View/Frontend/GestionUtilisateur.php');
}
function deconnection()
{ 
    require('Manager/Frontend/Retour.php'); 
   // $ICdeconnection = new Retour();
   // $Datadeconnection = $ICdeconnection->deconnection();
   // require('View/Frontend/GestionUtilisateur.php');
}
function TrieRecette()
{ 
    require('Manager/Frontend/Recette.php');
    $ICTrieRecette = new Recette();
    $DataTrieRecette = $ICTrieRecette->TrieRecette();
    require('View/Frontend/TrieRecette.php');
}
function RecetteToutNiveau()
{     
    require('Manager/Frontend/Recette.php');
    $ICRecette = new Recette();
    $DataRecette = $ICRecette->RecupereRecetteTousNiveau();
    require('View/Frontend/RecetteTousNiveau.php');
}

?>