<?php
//connexion a la base de données
try  
  {
    //Local
    $bdd=new PDO('mysql:host=localhost;dbname=projet5;charset=utf8', 'root', 'root') ;
    //online
    //
    //$bdd=new PDO('mysql:host=db5006311013.hosting-data.io;dbname=dbs5268898;charset=utf8', 'dbu402848', 'ceciestunmotdepasse!') ;
  }
catch (PDOException $e) 
  {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
  }
?>