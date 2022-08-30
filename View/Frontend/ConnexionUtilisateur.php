<?php $title = 'connexionutilisateur' ; ?>
<?php ob_start() ; ?>
<section id="main">
    <div class="carré">
        <p class="titreconnection">Bonjour, vous souhaitez vous connecter pour gerer vos recettes ?</p>

            <form action="index.php?action=SignIn" method="post" id="connexionutilisateur" >  
 
                <div id="formulairedeconnection"></div>
                    <input id="nameuser" name="nameuser" placeholder="pseudo">
                    <input id="mp" type="pasword" name="mp" placeholder="mot de passe">
                <button  type="submit" class="btn-submit" name="valider">Envoyer</button>  
                    <p>mot de passe oublier?</p>
                    <p>vous n'etes pas inscrit?</p>           
            </form>    
    </div>
    <?php foreach ($DataConnecter as $data) :
        $NameBDD = $data['PseudoUtilisateur'];
        $IdBDD = $data['IDUtilisateur'];
        $MpBDD = $data['MpUtilisateur'];
        $MpSaisie = $_POST['mp'];
        $MpSaisie = hash('ripemd160', $_POST['mp']);
        if($NameBDD == $_POST['nameuser'] && $MpBDD == $MpSaisie)
        {
            if($data['Administrateur'] == 0)
            {
                echo "<script type='text/javascript'>document.location.replace('index.php?action=ProfilUtilisateur&id=$IdBDD');</script>";
            }
            elseif($data['Administrateur'] == 1)
            {
                echo "<script type='text/javascript'>document.location.replace('index.php?action=PageAdministration');</script>";
            }
            else
            {
                echo"erreur dans base de donné";
            }
        }
        
    endforeach; ?>
</section>   
<?php $content = ob_get_clean() ; ?>
<?php require('Template.php'); ?>
