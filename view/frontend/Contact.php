<?php $title = 'contact' ; ?>
<?php ob_start() ; ?>
<section id="main">
     <div class="contact"><div class="placement"><p class="contactecris">Bonjour, vous souhaitez nous contacter joingnez nous a:<br/>cetteadresseestfictive@nepasjoindre.com </p></div>
    </div>
</section>   
<?php $content = ob_get_clean() ; ?>
<?php require('template.php'); ?>