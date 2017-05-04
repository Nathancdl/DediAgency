<?php 

/* ****************    MODEL **********************/

	
		function ChercherArticle()
	{
		global $bdd;
		$requete = $bdd -> prepare("SELECT * FROM article WHERE statut = 'actif'");
		$requete -> execute();
		
		return $requete -> fetchAll();
	}
	

?>


             