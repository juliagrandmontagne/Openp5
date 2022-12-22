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
    //$DataUtilisateurperso = $ICUtilisateur-> Searchbar();
    require('View/Frontend/GestionUtilisateur.php');

}
function Searchbar()
{ 
    require('Model/Frontend/EspaceGestion.php'); 
    $ICsearch = new EspaceGestion();
    $DataUtilisateurperso = $ICsearch-> Searchbar();
    require('View/Frontend/GestionUtilisateur.php');
}
//lance la page gestion administratif (moderateur)
function ProfilAdministration()
{ 
    require('Model/Frontend/EspaceGestion.php'); 
    $ICAdministrateur = new EspaceGestion();
    $DataAdministrateur= $ICAdministrateur->ProfilAdministrateur();
    $DataAdministrateurutilisateur= $ICAdministrateur->ProfilAdministrateurutilisateur();
    require('View/Frontend/CompteModerateur.php');
}
//charge la page du recette (sera incrementer methode get pour recuperer la recette intdividuelle)
function PageRecette()
{ 
    require('Model/Frontend/Recette.php');    
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
    require('Model/Backend/CreerFicheRecette.php');
    $ICCreationRecette = new modelcreerrecette();
    $DataCreeRecette = $ICCreationRecette->CreeRecette();
    require('View/Frontend/EditionRecette.php');
}
function EditionRecette()
{ 
    require('Model/Backend/CreerFicheRecette.php');
    $ICCreationRecette = new modelcreerrecette();
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
    require('Model/Backend/CreationUtilisateur.php'); 
    $ICCreationUtilisateur = new modelcreerutilisateur();
    $DataCreeUtilisateur = $ICCreationUtilisateur->CreeUtilisateur();
    require('View/Frontend/Inscription.php');
}
//lance la fonction qui redirige la presone sur sont compte (utilisateur ou administrateur)
function SignIn()
{ 
    require('Model/Frontend/EspaceGestion.php'); 
    $ICConnecter = new EspaceGestion();
    $DataConnecter = $ICConnecter->SignIn();
    require('View/Frontend/ConnexionUtilisateur.php');
}
function boutonretour()
{ 
    require('Model/Frontend/Retour.php'); 
    $ICRetour = new Retour();
    $DataRetour = $ICRetour->BoutonRetour();
    require('View/Frontend/GestionUtilisateur.php');
}
function deconnection()
{ 
    require('Model/Frontend/Retour.php'); 
   // $ICdeconnection = new Retour();
   // $Datadeconnection = $ICdeconnection->deconnection();
   // require('View/Frontend/GestionUtilisateur.php');
}
function TrieRecette()
{ 
    require('Model/Frontend/Recette.php');
    $ICTrieRecette = new Recette();
    $DataTrieRecette = $ICTrieRecette->TrieRecette();
    require('View/Frontend/TrieRecette.php');
}

?>