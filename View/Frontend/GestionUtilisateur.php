<?php $title = 'compteutilisateur' ; ?>
<?php ob_start() ; ?>
  <section id="main">
  <form action="index.php?action=PageCreationEdition" method="post">
  <div class="ajout">ajouter une recette
<button  type="submit" class="boutton"><i class="fa-solid fa-plus" aria-hidden="true"class="icone"></i></button>
</form> 
</div>
    <div class="carrégestionrecette">
      <div class="recherche">
        <label for="site-search"></label>
        <input type="search" id="site-search" name="q">
        <button>chercher</button>
        
      </div>
        <div class="liste">
        <?php  foreach ($DataUtilisateur as $donnees) : ?>
          <label class="titrerecetteutilisateur"><?php echo $donnees['nomrecette']?></label>
          <form action="index.php?action=SupressionRecette" method="post" class="listeutilisateur">
  <div class="iconemodifier">
    <input type="text">
                <button  type="submit" class="icone"><i class="fa fa-trash" aria-hidden="true" class="icone" class="listeutilisateur"></i></button>
            </form>          
            <form action="index.php?action=EditionRecette" method="post" class="listeutilisateur">
              <button  type="submit" class="icone"> <i class='fas fa-edit'class="icone" ></i></button>
</div>
            </form>
        <?php endforeach; ?>
      </div>
    </div>
  </section>   
<?php $content = ob_get_clean() ; ?>
<?php require('Templatebis.php'); ?>