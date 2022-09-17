<header>
    <section id="menuheader"> 

        <div id="banniere_menu">  
           <nav class="espaceUtilisateur">
                     <ul class="laconnexion">
                        <li class="menuconnexion"><a class="boutonconnexion"href="index.php?action=PageAccueil">Déconnexion</a></li>
                    </ul>
                 </nav>
            <h1 id="titre">Bonjour <?php  foreach ($DataUtilisateurperso as $donnees) : ?>
          <?php echo $donnees['PseudoUtilisateur']?>
        <?php endforeach; ?>
         bienvenue sur vos historiques de recettes</h1>		
            <div id="barre">
            <a href="index.php?action=PageRecetteDebutant"><img src="Images/Mojito.jpg"  alt="logo de OH-lique" id="logo"></a>
         

            </div>  
        </div>   	
    </section>					
</header>