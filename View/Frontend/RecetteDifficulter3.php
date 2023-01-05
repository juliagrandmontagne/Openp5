<?php $title = 'recette' ; ?>
<?php ob_start() ; ?>
  <section id="FiltreAlcool">
  <aside class="MenuFiltreAlcool">
      <nav class="nav" >
        <ul>
          <li><a class="oh" href="index.php?action=TrieRecette&oh=Rhum">Rhum</a></li></br>
          <li><a class="oh" href="index.php?action=TrieRecette&oh=Vodka">Vodka</a></li>
          <li><a class="oh" href="index.php?action=TrieRecette&oh=Whisky">Whisky </a></li>
          <li><a class="oh" href="index.php?action=TrieRecette&oh=Scotch">Scotch</a></li>
          <li><a class="oh" href="index.php?action=TrieRecette&oh=Tequila">Tequila</a></li>
          <li><a class="oh" href="index.php?action=TrieRecette&oh=Champagne">Champagne</a></li>
        </ul>
      </nav>
    </aside>
</section> 
<section id="Pages"> 
  <?php  foreach ($DataRecetteConf as $donnees) : ?>
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
      </div>  <p>yooo</p> 
    </article>
  <?php endforeach; ?>
  
</section>
<?php $content = ob_get_clean() ; ?>
<?php require('Template.php'); ?>
