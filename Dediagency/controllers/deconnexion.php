<?php 

	/*********************     CONTROLLER  *****************************/
	
	// Fermeture de la session
	session_destroy();
	
	// Redirection vers l'accueil
	header("location:pageprincipale");
	
?>