<?php $title = 'pagerecette' ; ?>
<?php ob_start() ; ?>
    <section id="main">
        <div class="BouttonRetour"><a class="Retour" href="index.php?action=boutonretour">retour</a></div>
            <div id="Recette1">
                <?php  foreach ($DataPagerecette as $donnees) : ?>
                    <div class="TitRecette"><h2><?php echo $donnees['nomrecette']?></h2></div>
                    <div class="LesIngrédients"><?php echo $donnees['Ingredients']?></div>
                    <div class="LaRecette"><?php echo $donnees['Recette']?></div>
                    <div class="PhotoRecette"><img src="<?php echo $donnees['Images']?>" class="PhotoDeLaRecette" alt="photo de la recette"></div>
            

                <?php endforeach; ?>
            </div>
    </section>   
<script language="javascript">
    document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('Recette1').style.background = "<?php  foreach ($DataPagerecette as $donnees) : ?><?php echo $donnees['couleur']?><?php endforeach; ?>";
    });
</script> 
<?php $content = ob_get_clean() ; ?>
<?php require('Template.php'); ?>
