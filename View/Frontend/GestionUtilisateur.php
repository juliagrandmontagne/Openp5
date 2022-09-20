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
          <div class="classementrecette">
          <?php 
                  if( $donnees['difficulte']==1) 
                  {echo'debutant';
                  }
                  if( $donnees['difficulte']==2) 
                  {echo'intermédiaire';
                  }
                  if( $donnees['difficulte']==3) 
                  {echo'confirmé';
                  }
                  else{''; }  
              ?>
            </div>
          <form action="index.php?action=SupressionRecette" method="post" class="listeutilisateur">
           <div class="iconeactionrecette">
            <input class="none" name="ID" value="<?php echo $donnees['ID']?>">
              <button  type="submit" class="icone"><i class="fa fa-trash" aria-hidden="true" class="listeutilisateur"></i></button>
          </form>          
          <form action="index.php?action=PageCreationEdition" method="post" class="listeutilisateur">
             <input class="none" name="ID" value="<?php echo $donnees['ID']?>"> 
              <button  type="submit" class="icone"> <i class='fas fa-edit'class="icone" ></i></button>
   <?php $identite=$donnees['ID']?>

          </form>
          <form action="index.php?action=PageRecette&id=<?php echo "$identite"?>" method="post" class="listeutilisateur">
             <input class="none" name="ID" value="<?php echo $donnees['ID']?>"> 
              <button  type="submit" class="icone" class='fa-solid fa-user'></button>
          </form>
           </div>
           </div>
 
        <?php endforeach;?>
       </div>
    </div>
  </section>   
<?php $content = ob_get_clean() ; ?>
<?php require('Templatebis.php'); ?>