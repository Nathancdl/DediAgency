<?php 

	/*********************     CONTROLLER  *****************************/
	
	
	require_once ("models/identification.php");
	   
	
	// Gestion formulaire de connexion 
	if(isset($_POST["submit"]))
	{
		extract($_POST);
		var_dump($_POST);
        
		if(!empty($login) && !empty($password))
		{
			$donnees = identification($login,$password);
            var_dump($donnees);
			if(!empty($donnees))
			{
				$_SESSION["id"] = $donnees;
                $_SESSION["connecte"] = true;
				
				
				header("location:pageprincipale");
				
			}
			else{
				$erreur = "Nom ou mot de pass incorrect";
			}
		}
		else
		{
			$erreur = "Veuillez remplir tous les champs";
		}
	}
	

	
	
	require_once("views/identification.php");

?>