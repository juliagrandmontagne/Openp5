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
      <?php  foreach ($DataAdministrateurutilisateur as $donnees) : ?>
        <p><?php echo $donnees['PseudoUtilisateur']?></p>
        <?php endforeach?>
    </div>
    <div class="gestionadministratifrecette">
      <div class="recherche">
        <label for="site-search"></label>
        <input type="search" id="site-search" name="q">
        <button>chercher</button>
      </div>
      <div class="liste"><p>ici prochainement la liste des recettes</p>
      <?php  foreach ($DataAdministrateur as $donnees) : ?>
 <p><?php echo $donnees['nomrecette']?></p>
 <?php endforeach?>
      </div>
  </div>
</section>   
<?php $content = ob_get_clean() ; ?>
<?php require('Template.php'); ?>