<?php $title = 'recette' ; ?>
  <div id="trieoh">
    <aside class="sidebar">
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
  </div> 
<?php ob_start() ; ?>
  <section id="pages"> 
      <?php  foreach ($DataRecetteDeb as $donnees) : ?>   
        <article class="espacerecettes">
          <div class='titrecocktail'> 
            <?php echo $donnees['nomrecette']?>         
           
          <div class="recette"><?php echo $donnees['Recette']?> <br>
            <img src="<?php echo $donnees['image']?>" alt="illustrationCoktail" class="illustrationCoktail"> 
          </div>
            <?php $identite=$donnees['ID']?>
          <div class="suite"><a class="suitelien" href="index.php?action=PageRecette&id=<?php echo "$identite"?>">lire la suite</a></div>   
        </article>
    <?php endforeach; ?>
  </section>
<?php $content = ob_get_clean() ; ?>
<?php require('Templatebis.php'); ?>