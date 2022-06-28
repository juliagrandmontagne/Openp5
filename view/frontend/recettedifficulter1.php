<?php $title = 'recette' ; ?>
<?php ob_start() ; ?>
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
<?php  foreach ($datarecettedeb as $donnees) : ?>   
    <section id="page"> 
    <div class="espacerecettes">
    <div class='titrecocktail'> 
    <?php echo $donnees['nomrecette']?> 
 </div>
    <div class="recette"><?php echo $donnees['Recette']?> <br>
    <img src="<?php echo $donnees['image']?>" alt="illustrationCoktail" class="illustrationCoktail"> </div>
    <div class="suite"><a class="suitelien" href="#">lire la suite</a></div>  
 
    
    </section>
   <?php endforeach; ?>
<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>