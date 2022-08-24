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
        <div class="liste"><p>ici prochainement la listes</p></div>
        <?php  foreach ($DataUtilisateur as $donnees) : ?>
          <p><?php echo $donnees['nomrecette']?></p>
          <form action="index.php?action=SupressionRecette" method="post">

                <button  type="submit" class="btn-submit"><i class="fa fa-trash" aria-hidden="true"class="icone"></i></button>
            </form>          
            <form action="index.php?action=EditionRecette" method="post">
<button  type="submit" class="btn-submit"> <i class='fas fa-edit'class="icone" ></i></button>
</form>
         
          
         
        <?php endforeach; ?>
    </div>
  </section>   
<?php $content = ob_get_clean() ; ?>
<?php require('Templatebis.php'); ?>