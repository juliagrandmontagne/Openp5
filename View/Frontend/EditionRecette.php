<?php $title = 'editionrecette' ; ?>
<?php ob_start() ; ?>

<section id="editionrecette">
    <div id="recetteprevous">   
        <div class="titrecette" id="previoustitrecette" >Titre de la recette</div>
        <div class="lesingrédients" id="previouslesingrédients">Ingredients</div> 
        <div class="larecette" id="previouslarecette">Recette</div>
    </div>
    <div class="edition">
        <form action="#" method="post" id="creationrecette" >   
            <label  class="titrerecette" for="titrerecette" >Titre de la recette</label>
                <input  type="text" class="titrerecette" name="titrerecette" id="titrerecette" required onchange="changecontenutitre()">
            <label for="difficulte">cette recette s'adresse à un :</label>
                <select name="difficulte"  id="listedifficuter">
                <option selected value="1">Débutant</option>
                <option value="2">Intermédiaire</option>
                <option value="3" >Confirmer</option>
                </select>
            <label class="Recette" for="Recette">Recette</label>
                <textarea id="Recette" name="Recette" onchange="changecontenurecette()"></textarea>
            <label class="Ingredients" for="Ingredients">Ingrédients</label>
                <textarea id="Ingredients" name="Ingredients" onchange="changecontenuingredients()"></textarea>
            <label for="file">Image</label>
                <input type="file" name="file" id="file">
                    <table align="center">
                        <tr>
                        <td align="center"><label for="liste">Couleur du fond :</label>
                            <select name="liste" size="1" id="listeCouleur" onchange="changecouleur()">
                                <option selected style="color:#ffff" value="#ffff">Blanc</option>
                                <option style="color:#ffddbd" value="#ffddbd">Rouge</option>
                                <option style="color:#c4f8d8" value="#c4f8d8">Vert</option>
                                <option style="color:#bde0ff" value="#bde0ff" >Bleu</option>
                                <option style="color:#f9eac3" value="#f9eac3">Jaune</option>
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
    </div>


</section>  

<?php $content = ob_get_clean() ; ?>
<?php require('Template.php'); ?>
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
                        document.getElementById('previoustitrecette').innerHTML = document.getElementById('titrerecette').value; 
                    }
                    function changecontenuingredients() 
                        {
                        document.getElementById('previouslesingrédients').innerHTML = document.getElementById('Ingredients').value; 
                    }
                    function changecontenurecette() 
                        {
                        document.getElementById('previoustitrecette').innerHTML = document.getElementById('Recette').value; 
                    }
                </script> 