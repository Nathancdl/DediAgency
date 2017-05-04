<?php 

/* ****************    MODEL **********************/



	function identification($login,$mdp)
	{
		global $bdd;
		$requete = $bdd -> prepare("SELECT * FROM user WHERE login = :login AND mdp = :mdp ");
		$requete -> bindValue(":login",$login,PDO::PARAM_STR);
		$requete -> bindValue(":mdp",sha1($mdp),PDO::PARAM_STR);
		
		$requete -> execute();
		
		return $requete -> fetchAll();
	}
	
	
	
	
	
	
	


	
	
	
	
	
	
	
?>