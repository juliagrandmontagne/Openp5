<?php $title = 'compteutilisateur' ; ?>
<?php ob_start() ; ?>
  <section id="main">
  <form action="index.php?action=PageCreationEdition" method="post">
  <div class="ajout">
<button  type="submit" class="boutton"><p class="ajout">ajouter une recette</p></button>
</form> 
</div>
    <div class="carregestionrecette">
      <div class="recherche">
        <label for="site-search"></label>
        <input type="search" id="site-search" name="q">
        <button id="chercher">chercher</button>
      </div>
        <div class="liste">
        <?php  foreach ($DataUtilisateur as $donnees) : ?>
          <div class="elementrecette">
          <h2 class="titrerecetteutilisateur"><?php echo $donnees['nomrecette']?></h2>
          <form action="index.php?action=SupressionRecette" method="post" class="listeutilisateur">
           <div class="iconeactionrecette">
            <input class="none" value="<?php echo $donnees['ID']?>">
              <button  type="submit" class="icone"><i class="fa fa-trash" aria-hidden="true" class="listeutilisateur"></i></button>
          </form>          
          <form action="index.php?action=EditionRecette" method="post" class="listeutilisateur">
             <input class="none" value="<?php echo $donnees['ID']?>"> 
              <button  type="submit" class="icone"> <i class='fas fa-edit'class="icone" ></i></button>
          </form>
           </div>
           </div>
        <?php endforeach;?>
       </div>
    </div>
  </section>   
<?php $content = ob_get_clean() ; ?>
<?php require('Templatebis.php'); ?>