<?php

    header('Access-Control-Allow-Origin: *');  
    header('Content-Type: text/html; charset=utf-8');
	  ini_set ("display_errors",1);


  if ($_REQUEST['fct']=="UserLogin") 
  {
      // tester si la correspondance email / pass est bonne + renvoyer un json avec le résultat 
  }

  if ($_REQUEST['fct']=="UserAdd") 
  {
    // Ajouter l'utilisateur a la db, controle des champs + sécurité des requetes
  }

  if ($_REQUEST['fct']=="UserPasswordReset") 
  {
    
    
  }



?>
