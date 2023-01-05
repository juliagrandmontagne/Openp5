// Constante pour faire appel l'ID Select présent en HTML
const selectCouleur = document.getElementById('selectCouleur');
// Création de la fonction
class Newcouleur
	{
        constructor()
        {
            this.selectCouleur = selectCouleur;
            this.couleur();
        }
        couleur()
        {
            // Définir la constante pour créer la balise Option
            dataCouleur.forEach((couleur, index) => {
                this.choixCouleur =  document.createElement('option');
                this.choixCouleur.innerHTML = couleur; // Insérer le texte
                this.choixCouleur.value = dataCode[index] // Insérer la valeur
                this.selectCouleur.appendChild(this.choixCouleur) // Définir l'option comme étant l'enfant de Select 
            });
        }
    }
    const lancement = new Newcouleur()