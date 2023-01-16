<?php
//connexion a la base de données
try  
{
  //Local
  //$bdd=new PDO('mysql:host=localhost;dbname=projet5;charset=utf8', 'root', 'root') ;
  //online
  $bdd=new PDO('mysql:host=db5010962148.hosting-data.io;dbname=dbs9266989;charset=utf8', 'dbu4459812' , 'Lemopdetoutencanon!') ;
}
catch (PDOException $e) 
{
  echo "Error!: " . $e->getMessage() . "<br/>";
  die();
}
?>
