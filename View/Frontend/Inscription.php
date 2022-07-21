<?php $title = 'inscription' ; ?>
<?php ob_start() ; ?>
  <div class="carré"> 
    <p class="titreconnection">Bonjour, vous souhaitez rejoindre l'aventure ? Pas de souci ! Inscrivez vous !</p>
      <form action="index.php?action=creerutilisateur" method="post" id="connexionutilisateur" >   
          <div id="titre-commentaire"></div>
          <input class="nameuser" name="nameuser" placeholder="pseudo">
          <input id="comment" type="pasword" name="mp" placeholder="mot de passe">
          <input class="email" name="email" placeholder="email">
          <button  type="submit" class="btn-submit" name="valider">VALIDER</button>
      </form> 
  </div>
<?php $content = ob_get_clean() ; ?>
<?php require('Template.php'); ?>