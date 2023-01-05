 <?php session_start();?>
     <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css"/>
        <script src="https://kit.fontawesome.com/a1efcfbe5e.js" crossorigin="anonymous"></script>
		<title>Tout-en-canons</title>
	</head>
    <body>
        <div id="Contenaire">
   
        <?php if (isset($_SESSION['connecter']))
         {
           require ('Headerbis.php'); 
           //require ('Header.php');
          } 
           else  {
             require ('Header.php');
          } ?>
            <?=$content ?>
            <?php require ('Footer.php'); ?>
        </div>
        <script src="View/js/donnees.js"></script>
    <script src="View/js/javascript.js"></script>
    <script src="View/js/gestioncouleurdynamique.js"></script>
    
    </body>	
</html> 