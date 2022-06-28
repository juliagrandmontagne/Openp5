<?php $title = 'pagerecette' ; ?>
<?php ob_start() ; ?>
<section id="main">
    <div class="bouttonretour"></div>
     <div class="recette1">
         
         <div class="titrecette">ici prochainement le future titre de la recette</div>
         <div class="larecette">ici prochainement la future la recette</div>
         <div class="photorecette">ici prochainement la future photo la recette</div>
    </div>
</section>   
<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>