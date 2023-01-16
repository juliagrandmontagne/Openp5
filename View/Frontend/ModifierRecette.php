<?php $title = 'editionrecette' ; ?>
<?php session_start(); ?>
<?php ob_start() ; ?>
<h3 class="Titre">voici l'endroit ou vous pourrez modifier vos recettes</h3>
    <nav class="espaceUtilisateur">
        <ul class="retourUtilisateur">
          <li class="MenuConnexion"><a class="BoutonConnexion" href="index.php?action=ProfilUtilisateur&id=<?php echo $_SESSION["id"]?>">Retour</a></li>
        </ul>
    </nav>
<?php  foreach ($DataAfficherRecette as $donnees) : ?>
    <div class="Edition">
            <form action="index.php?action=ModifierRecette" method="POST" id="CreationRecette" enctype="multipart/form-data">   
                <label  class="TitreRecette" for="TitreRecette" >Titre de la recette</label>
                    <input  type="text" class="TitreRecette" name="titrerecette" id="TitreRecette" required onchange="changecontenutitre()" value="<?php echo $donnees['nomrecette']?>">
                <label for="difficulte">cette recette s'adresse à un :</label>
                    <select name="difficulte"  id="difficulte">
                    <option selected value="1">Débutant</option>
                    <option value="2">Intermédiaire</option>
                    <option value="3" >Confirmer</option>
                    </select>
                  
                    <input class="None" name="IDUtilisateur" value="<?php echo $donnees['IDUtilisateur']?>">
                    <input class="None" name="ID" value="<?php echo $donnees['ID']?>">
                        <?php $var=$donnees['ID'];?>
                <label class="Recette" for="Recette">Recette</label>
                    <textarea id="Recette" name="Recette" onchange="changecontenurecette()"><?php echo $donnees['Recette']?></textarea>
                <label class="Ingredients" for="Ingredients">Ingrédients</label>
                    <textarea id="Ingredients" name="Ingredients" onchange="changecontenuingredients()"><?php echo $donnees['Ingredients']?></textarea>
<?php endforeach; ?>
                    <label for="file">Image</label>
                    <input type="file" name="file" id="file">
                <label for="selectCouleur">Couleur du fond :</label>
                    <select name="selectCouleur" id="selectCouleur" onchange="changecouleur()">
                    <option value="" >séléctionner votre couleur</option>
                    </select>
                <button  type="submit" class="BoutonEnvoyer" name="valider" id="Valider"  onClick="ok()">VALIDER</button>
            </form>
                 <?php
                    if(isset($_FILES['file']))
                    {
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
                    if(in_array($extension, $extensions))
                    {
                        move_uploaded_file($tmpName, './upload/'.$name);
                    }
                    else
                    {}
                 ?>
                        
                <?php
                    //faire une boucle si imput as une valeur id on reste sur la page sinon redirection tableau de bord 
                    if (isset($var)) 
                    {}
                    else
                    {
                    session_start();
                    $IdBDD = $_SESSION["id"];
                    echo "<script type='text/javascript'>document.location.replace('index.php?action=ProfilUtilisateur&id=$IdBDD');</script>";
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
<?php $content = ob_get_clean() ; ?>
<?php require('Templatebis.php'); ?>

   