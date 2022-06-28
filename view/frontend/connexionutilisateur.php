<?php $title = 'connexionutilisateur' ; ?>
<?php ob_start() ; ?>
<section id="main">
     <div class="carré">
        <p class="titreconnection">Bonjour, vous souhaitez vous connecter pour gerez vos recette ?</p>
            <form action="#" method="post" id="connexionutilisateur" >     
                <div id="formulairedeconnection"></div>
                    <input class="nameuser" name="nameuser" placeholder="pseudo">
                    <input id="motdepasse" type="pasword" name="mp" placeholder="mot de passe">
                <button  type="submit" class="btn-submit" name="valider">Envoyer</button>             
            </form>
            <//?php foreach ($databdseconnecter as $donnees) :
    $namesaisie = $donnees['login'];
    $mpsaisie = $donnees['mp'];
    $namesaisieadmin = $donnees['adminlogin'];
    $mpsaisieadmin = $donnees['adminmp'];

            if(!empty($_POST['nameuser']) && !empty($_POST['mp']) )  
              {
                  if( password_verify($_POST['mp'], $mpsaisie,) && password_verify($_POST['nameuser'], $namesaisie,)) 
                  {
                    session_start (); 
                    $_SESSION['login'] = 'toto' ;
                  echo "<//script type='text/javascript'>document.location.replace('index.php?action=utilisateur');<//script>";
                  }
                  if( password_verify($_POST['mp'], $mpsaisieadmin,) && password_verify($_POST['nameuser'], $namesaisieadmin,)) 
                  {
                    session_start (); 
                    $_SESSION['login'] = 'toto' ;
                  echo "<//script type='text/javascript'>document.location.replace('index.php?'administration');<//script>";
                  }
                  else{ echo"veuillez completer tous les champs ";}
                }
              else{ }
    endforeach; ?>
    </div>
</section>   
<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>