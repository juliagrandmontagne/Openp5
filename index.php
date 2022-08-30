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
    //lance la fonction qui créé un uilisateur
    case'EditionRecette';
    EditionRecette();
    break;
    case'SupressionRecette';
    SupressionRecette();
    break;

   }

}
else
{
  pageAccueil();
}

?>