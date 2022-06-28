<?php $title = 'Accueil' ; ?>
<?php ob_start() ; ?>
    <section id="page">
    <figure><img src="images/cocktail.jpg" alt="image cocktail" id="slider"></figure>	
    
    <p class="speetch">Bienvenue chez les OH-liques ! Nous avons crée une plateforme de partage de recette de cocktail .vous trouverez 3 niveau de difficulté:</br>-Débutant pour les recette avec peut d'ingrédients et peut de technique</br>-Intermédiaire pour les recette avec peut de technique mais plus d'ingredients qui peuvent etre moins répendu </br>-Confirmer pour les recette les plus audacieuses</p>
    </section>
<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>