const dataCouleur = ["Blanc","bleu"];
const dataCode = ["#ffff","#bde0ff"];
dataCouleur.forEach(function(couleur){
	document.getElementById('afficherCouleur').innerHTML += couleur;
});
dataCode.forEach(function(Code){
	document.getElementById('afficherCode').innerHTML += Code;
});