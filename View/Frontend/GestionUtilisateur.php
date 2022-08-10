<?php $title = 'compteutilisateur' ; ?>
<?php ob_start() ; ?>
  <section id="main">
    <div class="ajout">ajouter une recette<div class="boutton"> <div class="fa-solid fa-plus"></div></div></div>
    <div class="carrégestionrecette">
      <div class="recherche">
        <label for="site-search"></label>
        <input type="search" id="site-search" name="q">
        <button>chercher</button>
        
      </div>
        <div class="liste"><p>ici prochainement la liste</p></div>
    </div>
  </section>   
<?php $content = ob_get_clean() ; ?>
<?php require('Template.php'); ?>