<header>
    <section id="menuheader"> 

        <div id="banniere_menu">
               <h1 id="titre">Bonjour <?php  foreach ($DataUtilisateurperso as $donnees) : ?>
          <?php echo $donnees['PseudoUtilisateur']?>
        <?php endforeach; ?>
         bienvenue sur votre espace personelle</h1>	 
           <nav class="espaceUtilisateur">
                     <ul class="laconnexion">
                        <li class="menuconnexion"><a class="boutonconnexion"href="index.php?action=PageAccueil">Déconnexion</a></li>
                        <li class="menuconnexion"><a class="boutonconnexion"href="index.php?action=ProfilUtilisateur&id=1">tableau de bord</a></li>
                    </ul>
                 </nav>
                 <nav>
                     <ul>
                        <li class="naviguation">
                            <a href="index.php?action=PageRecetteDebutant">Débutant
                                 <i class="fas fa-leaf feuille"></i>
                            </a>
                        </li>
                        <li class="naviguation">
                            <a href="index.php?action=PageRecetteIntermediaire">Intermédiaire
                                <i class="fas fa-leaf feuille"></i><i class="fas fa-leaf feuille"></i>
                            </a>
                        </li>
                        <li class="naviguation">
                            <a href="index.php?action=PageRecetteConfirmer">Confirmé
                                <i class="fas fa-leaf feuille"></i><i class="fas fa-leaf feuille"></i><i class="fas fa-leaf feuille"></i>
                            </a>
                        </li>
                    </ul>
                 </nav>
      	
            <div id="barre">
            <a href="index.php?action=PageRecetteDebutant"><img src="Images/Mojito.jpg"  alt="logo de OH-lique" id="logo"></a>
         

            </div>  
        </div>   	
    </section>					
</header>