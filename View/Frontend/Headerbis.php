<header>
    <section id="menuheader"> 

        <div id="banniere_menu"> 
            <h1 id="titre">Bonjour <?php  foreach ($DataUtilisateurperso as $donnees) : ?>
          <?php echo $donnees['PseudoUtilisateur']?>
        <?php endforeach; ?>
         bienvenue sur vos historiques de recettes</h1>		
            <div id="barre">
             <img src="Images/Mojito.jpg" alt="logo de OH-lique" id="logo" >
                 <nav>
                     <ul>
                        <li class="naviguation">
                            <a href="index.php?action=PageAccueil">Déconnexion
                            </a>
                        </li>

                            </a>
                        </li>
                    </ul>
                 </nav>
            </div>  
        </div>   	
    </section>					
</header>