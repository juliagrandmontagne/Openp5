<?php $title = 'pagerecette' ; ?>
<?php ob_start() ; ?>
    <section id="main">
        <div class="bouttonretour"><a class="retour" href="index.php?action=boutonretour">retour</a></div>
            <div class="recette1">
            <?php  foreach ($DataPagerecette as $donnees) : ?>
                <div class="titrecette"><?php echo $donnees['nomrecette']?></div>
                <div class="lesingrédients"><?php echo $donnees['Ingredients']?></div>
                <div class="larecette"><?php echo $donnees['Recette']?></div>
                <div class="photorecette"><?php echo $donnees['']?>ici prochainement la future photo la recette</div>
                <?php endforeach; ?>
            </div>
    </section>   
<?php $content = ob_get_clean() ; ?>
<?php require('Template.php'); ?>