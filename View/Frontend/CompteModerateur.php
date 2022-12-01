<?php $title = 'comptemoderateur' ; ?>
<?php ob_start() ; ?>
<section id="Admin">
  <div class="GestionAdministratifUilisateur">
      <div class="Recherche">
        <label for="SiteSearch"></label>
        <input type="search" id="SiteSearch" name="q">
        <button>chercher</button>
      </div>
      <div class="Liste"></div>
        <?php  foreach ($DataAdministrateurutilisateur as $donnees) : ?>
        <div class="ElementRecette">
        <p class="ElementAdmin"><?php echo $donnees['PseudoUtilisateur']?></p>
        <form action="index.php?action=SupressionProfilAdmin" method="post" class="ListeUtilisateur">
          <input class="None" name="IDUtilisateur" value="<?php echo $donnees['IDUtilisateur']?>">
          <button  type="submit" class="Icone"><i class="fa fa-trash" aria-hidden="true" class="ListeUtilisateur"></i></button>
        </form> 
        </div>
        <?php endforeach?>
  </div>
    <div class="GestionAdministratifRecette">
      <div class="Recherche">
        <label for="SiteSearch"></label>
        <input type="search" id="SiteSearch" name="q">
        <button>chercher</button>
      </div>
      <div class="Liste">
        <?php  foreach ($DataAdministrateur as $donnees) : ?>
        <div class="ElementRecette">
         <p class="ElementAdmin"><?php echo $donnees['nomrecette']?></p>
         <form action="index.php?action=SupressionRecetteAdmin" method="post" class="ListeUtilisateur">
            <input class="None" name="ID" value="<?php echo $donnees['ID']?>">
            <button  type="submit" class="Icone"><i class="fa fa-trash" aria-hidden="true" class="ListeUtilisateur"></i></button>
          </form>  
          </div>          
        <?php endforeach?>
      </div>
  </div>
</section>   
<?php $content = ob_get_clean() ; ?>
<?php require('Templatebis.php'); ?>