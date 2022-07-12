<?php $title = 'connexionutilisateur' ; ?>
<?php ob_start() ; ?>
<section id="main">
     <div class="carré">
        <p class="titreconnection">Bonjour, vous souhaitez vous connecter pour gerez vos recette ?</p>
            <form action="index.php?action=connexionutilisateur&id=1" method="post" id="connexionutilisateur" >     
                <div id="formulairedeconnection"></div>
                    <input class="nameuser" name="nameuser" placeholder="pseudo">
                    <input id="motdepasse" type="pasword" name="mp" placeholder="mot de passe">
                <button  type="submit" class="btn-submit" name="valider">Envoyer</button>             
            </form>

    </div>
</section>   
<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>