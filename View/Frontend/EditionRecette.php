<?php $title = 'editionrecette' ; ?>
<?php ob_start() ; ?>
<section id="editionrecette">
     <div class="recetteprevous"></div>
    <div class="edition">
        <form action="#" method="post" id="creationrecette" >   
            <label  class="titrerecette" for="titrerecette" >titre de la recette</label>
                <input  type="text" class="titrerecette" name="titrerecette" id="titrerecette" required>
                <div>
                    <label for="difficulté">difficulté</label>
                    <input type="radio" id="Difficulte" name="Difficulte" value="1">1
                    <input type="radio" id="Difficulte" name="Difficulte" value="2">2
                    <input type="radio" id="Difficulte" name="Difficulte" value="3">3
                </div>
                    <label class="Recette" for="Recette"> Recette</label>
                    <textarea id="Recette" name="Recette" ></textarea>
                    <label class="Ingrédients" for="Ingrédients">Ingrédients</label>
                    <textarea id="Ingrédients" name="Ingrédients"></textarea>
                    <label for="file">Image</label>
                    <input type="file" name="file" id="file">
                    <button  type="submit" class="btn-submit" name="valider">VALIDER</button>
        </form> 
    </div>
</section>   
<?php $content = ob_get_clean() ; ?>
<?php require('Template.php'); ?>