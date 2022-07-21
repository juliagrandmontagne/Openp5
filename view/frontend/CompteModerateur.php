<?php $title = 'comptemoderateur' ; ?>
<?php ob_start() ; ?>
<section id="admin">
  
     <div class="gestionadministratifuilisateur">
     <div class="recherche">
     <label for="site-search"></label>
      <input type="search" id="site-search" name="q">
       <button>chercher</button>
      </div>
     <div class="liste"><p>ici prochainement la liste d'utilisateur</p></div>
    </div>
    <div class="gestionadministratifrecette">
    <div class="recherche">
     <label for="site-search"></label>
      <input type="search" id="site-search" name="q">
       <button>chercher</button>
       </div>
    <div class="liste"><p>ici prochainement la liste des recettes</p></div>
  </div>
</section>   
<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>