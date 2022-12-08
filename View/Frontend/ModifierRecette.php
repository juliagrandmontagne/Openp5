<?php $title = 'editionrecette' ; ?>
<?php ob_start() ; ?>
<?php  foreach ($DataAfficherRecette as $donnees) : ?>
    <div class="Edition">
            <form action="index.php?action=ModifierRecette" method="post" id="CreationRecette" >   
                <label  class="TitreRecette" for="TitreRecette" >Titre de la recette</label>
                    <input  type="text" class="TitreRecette" name="titrerecette" id="TitreRecette" required onchange="changecontenutitre()" value="<?php echo $donnees['nomrecette']?>">
                <label for="difficulte">cette recette s'adresse à un :</label>
                    <select name="difficulte"  id="ListeDifficuter">
                    <option selected value="1">Débutant</option>
                    <option value="2">Intermédiaire</option>
                    <option value="3" >Confirmer</option>
                    </select>
                    <input class="None" name="IDUtilisateur" value="<?php echo $donnees['IDUtilisateur']?>">
                    <input class="None" name="ID" value="<?php echo $donnees['ID']?>">
                <label class="Recette" for="Recette">Recette</label>
                    <textarea id="Recette" name="Recette" onchange="changecontenurecette()"><?php echo $donnees['Recette']?></textarea>
                <label class="Ingredients" for="Ingredients">Ingrédients</label>
                    <textarea id="Ingredients" name="Ingredients" onchange="changecontenuingredients()"><?php echo $donnees['Ingredients']?></textarea>
                <label for="file">Image</label>
                    <input type="file" name="file" id="file">
                <label for="liste">Couleur du fond :</label>
                    <select name="selectCouleur" id="selectCouleur" onchange="changecouleur()">
                    <option value="" >seclectionner votre couleur</option>
                    </select>
<?php endforeach; ?>
                <button  type="submit" class="BoutonEnvoyer" name="valider" id="Valider"  onClick="ok()">VALIDER</button>
            </form>
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
        </div>
    <section id="laEditionRecette">
        <div id="RecettePrevous">   
            <div class="TitRecette" id="PreviousTitRecette" >Titre de la recette</div>
            <div class="LesIngrédients" id="PreviousLesIngrédients">Ingredients</div> 
            <div class="LaRecette" id="PreviousLaRecette">Recette</div>
        </div>
    
    </section>  
    </div> 
          
<?php $content = ob_get_clean() ; ?>
<?php require('Templatebis.php'); ?>

   