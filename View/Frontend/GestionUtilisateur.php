<?php $title = 'compteutilisateur' ; ?>
<?php ob_start() ; ?>
  <section id="ConteneurPrincipal">
    <form action="index.php?action=PageCreationEdition" method="post">
      <div class="Ajout">
        <button  type="submit" class="Boutton"><p class="Ajout">ajouter une recette</p></button>
      </div>
    </form> 
    <div class="CarreGestionRecette">
      <div class="Recherche">
        <form action="index.php?action=Searchbar" method="GET">
          <label for="SiteSearch"></label>
          <input type="Search" id="SiteSearch" name="q" placeholder="recherche">
          <input type="submit" name="chercher">
        </form>  
      </div>
        <div class="Liste">
          <?php  foreach ($DataUtilisateur as $donnees) : ?>
            <div class="ElementRecette">
              <h2 class="TitreRecetteUtilisateur"><?php echo $donnees['nomrecette']?></h2> 
              <div class="ClassementRecette">
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
              <div class="IconeActionRecette">
                <form action="index.php?action=SupressionRecette" method="post" class="ListeUtilisateur">
                  <input class="None" name="ID" value="<?php echo $donnees['ID']?>">
                  <button  type="submit" class="Icone"><i class="fa fa-trash" aria-hidden="true" class="ListeUtilisateur"></i></button>
                </form> 
                <?php $identite=$donnees['ID']?>          
                <form action="index.php?action=PageCreationEdition&id=<?php echo "$identite"?>" method="post" class="ListeUtilisateur">
                  <input class="None" name="ID" value="<?php echo $donnees['ID']?>"> 
                  <button  type="submit" class="Icone"> <i class='fas fa-edit'class="Icone" ></i></button>
                   
                </form>
                <form action="index.php?action=PageRecette&id=<?php echo "$identite"?>" method="post" class="ListeUtilisateur">
                  <input class="None" name="ID" value="<?php echo $donnees['ID']?>"> 
                  <button  type="submit" class="Icone" class='fa-solid fa-user'></button>
                </form>
              </div>
           </div>
          <?php endforeach;?>
        </div>
    </div>
  </section>   
<?php $content = ob_get_clean() ; ?>
<?php require('Templatebis.php'); ?>