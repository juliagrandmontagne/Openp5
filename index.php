<?php 
require('Controller/Frontend/Controller.php');
require('Controller/Backend/Controller.php');
if (isset($_GET['action'])) 
{
  switch ($_GET['action'])
  {//charge la page acceuil
    case'PageAccueil':
    PageAccueil();
    break;
    //charge la page des liste recettes debutant
    case'PageRecetteDebutant':
    PageRecetteDebutant();
    break;
    //charge la page des liste recettes intermediaire
    case'PageRecetteIntermediaire':
    PageRecetteIntermediaire();
    break;
    //charge la page des liste recettes confirmer
    case'PageRecetteConfirmer':
    PageRecetteConfirmer();
    break;
    //charge la page inscription
    case'PageInscription':
    PageInscription();
    break;
    //lance la page de connexion
    case'PageLogin':
    PageLogin();
    break;
    //lance l'action qui trie le profil de celui qui ce connecte et qui redirigera vers utilisateur ou administrateur
    case'SignIn':
    SignIn();
    break;
    //lance la page gestion utilisateur
    case'ProfilUtilisateur':
    ProfilUtilisateur();
    break;
    //lance la page gestion administratif (moderateur)
    case'PageAdministration':
    ProfilAdministration();
    break;
    //charge la page du recette (sera incrementer methode get pour recuperer la recette intdividuelle)
    case'PageRecette':
    PageRecette();
    break;
    //Lance l'interface de creation d'une recette
    case'PageCreationEdition':
    PageCreationEdition();
    break;
    //lance la page contact
    case'PageContact':
    PageContact();
    break;
    //lance la fonction qui créé une recette
    case'Creationrecette';
    EditionRecette();
    break;
    //supression des recette sur l'espace
    case'SupressionRecette';
    SupressionRecette();
    break;
    //bouton retour avec effacement de session
    case'boutonretour';
    boutonretour();
    break;
    //instauration de la searchbar
    case'Searchbar';
    Searchbar();
    break;
    //suppression des recette pour le moderateur
    case'SupressionRecetteAdmin';
    SupressionRecetteAdmin();
    break;
    //suppression des profil pour le moderateur
    case'SupressionProfilAdmin';
    SupressionProfilAdmin();
    break;
    //creation profil
    case'CreerUtilisateur';
    CreerUtilisateur();
    break;
    //Modifier recette
    case'ModifierRecette';
    ModifierRecette();
    break;
    //creation de l'interface de modification de la recette
    case'AfficherRecette';
    AfficherRecette();
    break;
    //filtre recette par alcool
    case'TrieRecette';
    TrieRecette();
    break;
    //page ensemble des recettes
    case'RecetteToutNiveau';
    RecetteToutNiveau();
    break;
    //boutonesapceperso
    case'EspacePerso';
    EspacePerso();
    break;
    case'PageInscriptionAdmin';
    PageInscriptionAdmin();
    break;
    case'CreerAdministrateur';
    CreerAdministrateur();
    break;
   }
}
else
{
  pageAccueil();
}

?>