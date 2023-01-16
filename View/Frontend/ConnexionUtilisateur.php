<?php $title = 'connexionutilisateur' ; ?>
<?php ob_start() ; ?>
<section id="main">
    <div class="Carré">
        <p class="titreconnection">Bonjour, vous souhaitez vous connecter pour gérer vos recettes ?</p>
        
            <form action="index.php?action=SignIn" method="post" id="connexionutilisateur" >  
                     <div id="formulairedeconnection"></div>
                <input id="ChampNomUtilisateur" name="nameuser" placeholder="pseudo">
                <input id="MotDePasse" type="password" name="mp" placeholder="mot de passe">
                <button  type="submit" class="BoutonEnvoyer" name="valider">Envoyer</button>  
                    <p>mot de passe oublié?</p>
                    <p>vous n'êtes pas inscrit?</p>           
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
                    session_start();
                    $_SESSION["connecter"] = "1";
                    $_SESSION["id"] = $IdBDD;
                    echo "<script type='text/javascript'>document.location.replace('index.php?action=ProfilUtilisateur&id=$IdBDD');</script>";
                }
                elseif($data['Administrateur'] == 1)
                {
                    session_start();
                    $_SESSION["connecter"] = "1";
                    echo "<script type='text/javascript'>document.location.replace('index.php?action=PageAdministration');</script>";
                }
            else
            {
                echo "<script type='text/javascript'>document.location.replace('index.php?action=PageAdministration');</script>";
                echo"erreur dans base de donné";
            }
        }
    endforeach; ?>
</section>   
<?php $content = ob_get_clean() ; ?>
<?php require('Template.php'); ?>
