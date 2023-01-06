<?php $title = 'compteutilisateur' ; ?>
<?php ob_start() ; ?>
<?php session_start(); ?>
<h1 class="Titre">Bonjour bienvenue sur votre espace personelle</h1>
  <section id="ConteneurPrincipal">

  <nav class="EspaceUtilisateur">
                     <ul class="Ajout">
                        <li class="MenuConnexion"><a class="Bouton" href="index.php?action=PageCreationEdition&id=<?php echo $_SESSION["id"]?>">ajouter une recette</a></li>
                    </ul>
            </nav>
    <div class="CarreGestionRecette">
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
                  <button  type="submit" class="Icone"><i class="fa fa-trash" aria-hidden="true" ></i></button>
                </form>  
                <div class="None"><?php $id?>=<?php echo $donnees['ID']?></div>
                <form action="index.php?action=AfficherRecette&id=<?php echo $donnees['ID']?>" method="post" class="ListeUtilisateur">
                  <input class="None" name="ID" value="<?php echo $donnees['ID']?>">
                  <button  type="submit" class="Icone"><i class='fas fa-edit' ></i></button>
                </form>  

              </div>
           </div>
          <?php endforeach;?>
        </div>
    </div>
  </section>   
<?php $content = ob_get_clean() ; ?>
<?php require('Templatebis.php'); ?>