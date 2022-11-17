<?php $title = 'editionrecette' ; ?>
<?php ob_start() ; ?>
<section id="laEditionRecette">
    <div id="RecettePrevous">   
        <div class="TitRecette" id="PreviousTitRecette" >Titre de la recette</div>
        <div class="LesIngrédients" id="PreviousLesIngrédients">Ingredients</div> 
        <div class="LaRecette" id="PreviousLaRecette">Recette</div>
    </div>
    <div class="Edition">
        <form action="index.php?action=Creationrecette" method="post" id="CreationRecette" >   
            <label  class="TitreRecette" for="TitreRecette" >Titre de la recette</label>
                <input  type="text" class="TitreRecette" name="titrerecette" id="TitreRecette" required onchange="changecontenutitre()">
            <label for="difficulte">cette recette s'adresse à un :</label>
                <select name="difficulte"  id="ListeDifficuter">
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
                            
                                <option value="#ffff" >Blanc</option>
                                <option value="#ffddbd">Rouge</option>
                            </select>
                            </td>
                            </tr>
                            <tr>
                            <td height="40" align="center">
                            </td>
                            </tr>
                    </table>
            <button  type="submit" class="BoutonEnvoyer" name="valider" id="Valider"  onClick="ok()">VALIDER</button>
        </form>
    </div>
</section>  
</div>
<?php $content = ob_get_clean() ; ?>
<?php require('Templatebis.php'); ?>

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
                        document.getElementById('PreviousTitRecette').innerHTML = document.getElementById('TitreRecette').value; 
                    }
                    function changecontenuingredients() 
                        {
                        document.getElementById('PreviousLesIngrédients').innerHTML = document.getElementById('Ingredients').value; 
                    }
                    function changecontenurecette() 
                        {
                        document.getElementById('PreviousLaRecette').innerHTML = document.getElementById('Recette').value; 
                    }
                </script> 
                <?php
if(isset($_FILES['file'])){
  $tmpName = $_FILES['file']['tmp_name'];
  $name = $_FILES['file']['name'];
  $size = $_FILES['file']['size'];
  $error = $_FILES['file']['error'];
}
move_uploaded_file($tmpName, './Images/'.$name);
$tabExtension = explode('.', $name);
$extension = strtolower(end($tabExtension));
//$_SESSION['$name'] = $name;
//Tableau des extensions que l'on accepte
$extensions = ['jpg', 'png', 'jpeg', 'gif'];
if(in_array($extension, $extensions)){
    move_uploaded_file($tmpName, './upload/'.$name);
}
else{
    echo "Mauvaise extension";
}
?>