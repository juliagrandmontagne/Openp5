<?php $title = 'recette' ; ?>
<?php ob_start() ; ?>
  <section id="FiltreAlcool">
    <aside class="MenuFiltreAlcool">
      <nav class="nav" >
        <ul>
          <li><a class="oh" href="#">Rhum</a></li></br>
          <li><a class="oh" href="#">Vodka</a></li>
          <li><a class="oh" href="#">Whisky </a></li>
          <li><a class="oh" href="#">Scotch</a></li>
          <li><a class="oh" href="#">Tequila</a></li>
          <li><a class="oh" href="#">Champagne</a></li>
          <li><a class="oh" href="#">Moktail</a></li>
        </ul>
      </nav>
    </aside>
</section> 
<section id="Pages"> 
  <?php  foreach ($datarecetteconf as $donnees) : ?>
    <article class="EspaceRecettes">
      <div class='TitreCocktail'> 
      <h2><?php echo $donnees['nomrecette']?></h2>    
      </div>     
      <div class="Recette">
        <?php echo $donnees['Recette']?> <br>
        <img src="<?php echo $donnees['image']?>" alt="IllustrationCoktail" class="IllustrationCoktail"> 
      </div>
      <?php $identite=$donnees['ID']?>
      <div class="Suite"><a class="SuiteLien" href="index.php?action=PageRecette&id=<?php echo "$identite"?>">lire la suite</a>
      </div>   
    </article>
  <?php endforeach; ?>
</section>
<?php $content = ob_get_clean() ; ?>
<?php require('Template.php'); ?>
