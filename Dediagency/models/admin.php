<?php
function chercherArticle()
	{
		global $bdd;
		
		$requete = $bdd -> prepare( "SELECT * FROM article");
		
		
		
		$requete -> execute();
		
		return $requete -> fetchAll();
	}

function SupprimerArticle($id)
	{
		global $bdd;
		
		$requete = $bdd -> prepare( "DELETE FROM article WHERE id_art = ".$id);
		
		
		
		$requete -> execute();
		
		
	}


?>