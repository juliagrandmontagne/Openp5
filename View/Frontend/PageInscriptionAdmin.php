<?php $title = 'inscriptionadmin' ; ?>
<?php ob_start() ; ?>
  <section>
    <div class="Carré"> 
      <p class="TitreConnection">Bonjour, vous souhaitez ajouter un moderateur Pas de souci ! Inscrivez-le!Pour des raison de securiter seul un administrateur peut crééer un autre Administrateur</p>
        <form action="index.php?action=CreerAdministrateur" method="post" id="ConnexionUtilisateur" >   
            <div id="TitreCommentaire"></div>
              <input class="ChampNomUtilisateur" name="nameuser" placeholder="pseudo">
              <input id="ChampMotDePasse" type="password" name="mp" placeholder="mot de passe">
              <input class="Email" name="email" placeholder="email">
            <button  type="submit" class="BoutonEnvoyer" name="valider">VALIDER</button>
        </form> 
    </div>
</section>
<?php $content = ob_get_clean() ; ?>
<?php require('Templatebis.php'); ?>