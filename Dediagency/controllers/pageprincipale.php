<?php 

	/*********************     CONTROLLER  *****************************/
	
	
	require_once ("models/pageprincipale.php");
	
	
    $donnees = ChercherArticle();

	require_once("views/pageprincipale.php");

?>