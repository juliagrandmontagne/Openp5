<header>
    <section id="menuheader"> 
        <div id="BanniereMenu">
               <h1 id="Titre">Bonjour <?php  foreach ($DataUtilisateurperso as $donnees) : ?><?php echo $donnees['PseudoUtilisateur']?><?php endforeach; ?>bienvenue sur votre espace personelle</h1>	 
           <nav class="EspaceUtilisateur">
                     <ul class="LaConnexion">
                        <li class="MenuConnexion"><a class="BoutonConnexion"href="index.php?action=boutonretour">Déconnexion</a></li>
                    </ul>
            </nav>
            <div id="Barre">
                <a href="index.php?action=PageRecetteDebutant"><img src="Images/Mojito.jpg"  alt="logo de OH-lique" id="Logo"></a>
            </div>  
        </div>   	
    </section>					
</header>