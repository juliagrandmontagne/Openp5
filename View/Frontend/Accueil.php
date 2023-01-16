<?php $title = 'Accueil' ; ?>
<?php ob_start() ; ?>
    <section id="PageAcueil">
        <figure><img src="Images/Cocktail.jpg" alt="image cocktail" id="Slider">
        <figcaption class="Speetch">Bienvenue chez les Tout-en-canons ! Nous avons crée une plateforme de partage de recettes de cocktails. Vous trouverez 3 niveaux de difficultés :<br>-Débutant pour les recettes avec peu d'ingrédients et peu de technique<br>-Intermédiaire pour les recettes avec peu de technique mais plus d'ingredients mais qui peuvent être moins répandus dans le commerce.<br>-Confirmé pour les recettes les plus audacieuses.</figcaption>
    </figure>
        <div id="responsive"></div>	
    </section>
<?php $content = ob_get_clean() ; ?>
<?php require('Template.php'); ?>