<?php $title = 'editionrecette' ; ?>
<?php ob_start() ; ?>

<section id="editionrecette">
     <div id="recetteprevous"> <div class="titrecette" id="previoustitrecette" >Titre de la recette</div>
    <div class="lesingrédients" id="previouslesingrédients">Ingredients</div>
    <div class="larecette" id="previouslarecette">Recette</div></div>
    <div class="edition">
        <form action="#" method="post" id="creationrecette" >   
            <label  class="titrerecette" for="titrerecette" >titre de la recette</label>
                <input  type="text" class="titrerecette" name="titrerecette" id="titrerecette" required onchange="changecontenutitre()">
                <div>
                    <label for="difficulté">difficulté</label>
                    <select name="difficulté"  id="listedifficuter">
                    <option selected value="1">Débutant</option>
                    <option value="2">Intermédiaire</option>
                    <option value="3" >Confirmer</option>

                </div>
                    <label class="Recette" for="Recette"> Recette</label>
                    <textarea id="Recette" name="Recette" ></textarea>
                    <label class="Ingrédients" for="Ingrédients">Ingrédients</label>
                    <textarea id="Ingrédients" name="Ingrédients"></textarea>
                    <label for="file">Image</label>
                    <input type="file" name="file" id="file">
                    <table align="center">

                    <tr>
                    <td align="center"><label for="couleur">Couleur du texte :</label>
                    <select name="liste" size="1" id="listeCouleur" onchange="changecouleur()">
                    <option selected style="color:#ffff" value="#ffff">blanc</option>
                    <option style="color:#ffddbd" value="#ffddbd">Rouge</option>
                    <option style="color:#c4f8d8" value="#c4f8d8">Vert</option>
                    <option style="color:#bde0ff" value="#bde0ff" >Bleu</option>
                    <option style="color:#ebf1b6" value="#ebf1b6">Jaune</option>

                    </select>
                    </td>
                    </tr>
                    <tr>
                    <td height="40" align="center">
                   
                    </td>
                    </tr>
                    </table>

                    <button  type="submit" class="btn-submit" name="valider" id="valider"  onClick="ok()">VALIDER</button>
        </form> 
        <script language="javascript">
function changetaille() 
	{
	document.getElementById('titre').style.fontSize = document.getElementById('listeTaille').options[ document.getElementById('listeTaille').selectedIndex ].text+'px';
	}
function changecouleur() 
	{
	document.getElementById('recetteprevous').style.background = document.getElementById('listeCouleur').options[ document.getElementById('listeCouleur').selectedIndex ].value;
	}
function ok() 
	{
	localStorage.setItem('option2', document.getElementById('listeCouleur').selectedIndex);
	localStorage.setItem('option1', document.getElementById('listeTaille').selectedIndex);
    }
    function changecontenutitre() 
	{
    document.getElementById('texte').innerHTML = "I have changed!"; 
}
</script> 
    </div>
</section>  

<?php $content = ob_get_clean() ; ?>
<?php require('Template.php'); ?>