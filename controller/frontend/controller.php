<?php

function accueil()
{ 
require('view/frontend/accueil.php');
}
function debutant()
{ 
require('Model/frontend/recette.php');
$instanceclasserecettedeb = new modelrecette();
$datarecettedeb = $instanceclasserecettedeb->connexionbdrecetted1();
require('view/frontend/recettedifficulter1.php');
}
function intermediaire()
{ 
    require('Model/frontend/recette.php');
    $instanceclasserecetteint = new modelrecette();
    $datarecetteint = $instanceclasserecetteint-> connexionbdrecetted2();
    require('view/frontend/recettedifficulter2.php');
}
    function confirmer()
    { 
    //require('Model/frontend/recette.php');
   // $instanceclasserecetteconf = new modelrecette();
   // $datarecetteconf = $instanceclasserecetteconf-> connexionbdrecetted3();
    require('view/frontend/recettedifficulter3.php');
    }
    function inscription()
    { 
    require('view/frontend/inscription.php');
    }
    function connexionutilisateur()
    { 
    require('view/frontend/connexionutilisateur.php');
    }
    function utilisateur()
    { 
    require('view/frontend/gestionutilisateur.php');
    }
    function administration()
    { 
    require('view/frontend/comptemoderateur.php');
    }
    function recette()
    { 
    require('view/frontend/pagerecette.php');
    }
    function edition()
    { 
    require('view/frontend/editionrecette.php');
    }
    function contact()
    { 
    require('view/frontend/contact.php');
    }
    function creeutilisateur()
    { 
     require('Model/backend/creationutilisateur.php'); 
    $instanceclasseutilisateur = new modelcreerutilisateur();
    $databdseconnecter = $instanceclasseutilisateur->creeutilisateur();
   require('view/frontend/inscription.php');
    }
    function connectionutilisateur()
    { 
    require('Model/frontend/connectionutilisateur.php'); 
    $instanceseconnecter = new modelconnectionutilisateur();
    $databdseconnecterutilisateur = $instanceseconnecter->seconnecter();
    require('view/frontend/connexionutilisateur.php');
    }
?>