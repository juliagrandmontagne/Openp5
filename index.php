<?php 
require('controller/frontend/controller.php');
require('controller/backend/controller.php');
if (isset($_GET['action'])) 
{
      switch ($_GET['action'])
        {
            case'accueil':
            accueil();
            break;
            case'debutant':
            debutant();
            break;
            case'intermediaire':
            intermediaire();
            break;
            case'confirmer':
            confirmer();
            break;
            case'inscription':
            inscription();
            break;
            case'connexionutilisateur':
            connectionutilisateur();
            break;

            case'utilisateur':
            utilisateur();
            break;
            case'administration':
            administration();
            break;
            case'recette':
            recette();
            break;
            case'edition':
            edition();
            break;
            case'contact':
            contact();
            break;
            case'creerutilisateur';
            creeutilisateur();
            break;
            
            case'connectetoi';
            seconnecter();
          break;
        }
}

?>