<?php $title = 'Accueil' ; ?>
<?php ob_start() ; ?>
    <section id="PageAcueil">
        <figure><img src="Images/Cocktail.jpg" alt="image cocktail" id="Slider">
        <figcaption class="Speetch">Bienvenue chez les Tout-en-canons ! Nous avons crée une plateforme de partage de recette de cocktail .vous trouverez 3 niveau de difficulté:<br>-Débutant pour les recette avec peut d'ingrédients et peut de technique<br>-Intermédiaire pour les recette avec peut de technique mais plus d'ingredients qui peuvent etre moins répendu <br>-Confirmer pour les recette les plus audacieuses</figcaption>
    </figure>
        <div id="responsive"></div>	
    </section>
<?php $content = ob_get_clean() ; ?>
<?php require('Template.php'); ?>