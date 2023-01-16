<?php $title = 'comptemoderateur' ; ?>
<?php ob_start() ; ?>
<h3 >Bienvenue cher Administrateur: Voici la liste complète des utilisateurs ainsi que leurs recettes et la possibilité de les forcer à quitter la famille tout-en-canons.</h3>	
<nav class="EspaceUtilisateur">
      <ul class="Ajout">
        <li class="MenuConnexion"><a class="Bouton" href="index.php?action=PageInscriptionAdmin">ajouter un Moderateur</a></li>
      </ul>
  </nav>
<section id="Admin">
  <div class="GestionAdministratifUilisateur">
      <div class="Liste"></div>
        <?php  foreach ($DataAdministrateurutilisateur as $donnees) : ?>
          <div class="ElementRecette">
            <p class="ElementAdmin"><?php echo $donnees['PseudoUtilisateur']?></p>
              <form action="index.php?action=SupressionProfilAdmin" method="POST" class="ListeUtilisateur" enctype="multipart/form-data">
                <input class="None" name="IDUtilisateur" value="<?php echo $donnees['IDUtilisateur']?>">
                <button  type="submit" class="Icone"><i class="fa fa-trash" aria-hidden="true" ></i></button>
              </form> 
          </div>
        <?php endforeach?>
  </div>
    <div class="GestionAdministratifRecette">
      <div class="Liste">
        <?php  foreach ($DataAdministrateur as $donnees) : ?>
          <div class="ElementRecette">
            <p class="ElementAdmin"><?php echo $donnees['nomrecette']?></p>
              <form action="index.php?action=SupressionRecetteAdmin" method="post" class="ListeUtilisateur">
                  <input class="None" name="ID" value="<?php echo $donnees['ID']?>">
                  <button  type="submit" class="Icone"><i class="fa fa-trash" aria-hidden="true" ></i></button>
                </form>  
            </div>          
        <?php endforeach?>
      </div>
  </div>
</section>   
<?php $content = ob_get_clean() ; ?>
<?php require('Templatebis.php'); ?>