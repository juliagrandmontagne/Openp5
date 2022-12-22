<?php $title = 'recette' ; ?>
<?php ob_start() ; ?>
  <section id="FiltreAlcool">
    
<section id="Pages"> 
  <?php  foreach ($DataTrieRecette as $donnees) : ?>   
    <article class="EspaceRecettes">
      <div class='TitreCocktail'> 
        <h2><?php echo $donnees['nomrecette']?></h2>  
      </div>     
      <div class="Recette">
        <?php echo $donnees['Recette']?> <br>
        <img src="<?php echo $donnees['Images']?>" alt="IllustrationCoktail" class="IllustrationCoktail"> 
      </div>
      <?php $identite=$donnees['ID']?>
        <div class="Suite"><a class="SuiteLien" href="index.php?action=PageRecette&id=<?php echo "$identite"?>">lire la suite</a>
        </div>   
    </article>
  <?php endforeach; ?>
</section>
<?php $content = ob_get_clean() ; ?>
<?php require('Template.php'); ?>