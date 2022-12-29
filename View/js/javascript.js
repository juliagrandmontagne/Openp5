// Constante pour faire appel l'ID Select présent en HTML
const selectCouleur = document.getElementById('selectCouleur');
// Création de la fonction
class couleur()
	{
        constructor
        // Définir la constante pour créer la balise Option
        this.dataCouleur.forEach(function couleurselection(this.couleur, this.index){
            this.choixCouleur = document.createElement('option');
            this.choixCouleur.innerHTML = this.couleur; // Insérer le texte
            this.choixCouleur.value = dataCode[this.index] // Insérer la valeur
            selectCouleur.appendChild(choixCouleur) // Définir l'option comme étant l'enfant de Select 
        });
        const lancement=new couleurselection()
    }
    function background() {
        document.getElementById('Recette1').style.background = "<?php  foreach ($DataPagerecette as $donnees) : ?><?php echo $donnees['couleur']?><?php endforeach; ?>";
    };
// Appel de la fonction
couleur();

background();




