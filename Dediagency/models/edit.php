<?php 

/* ****************    MODEL **********************/

	
function ChercherEdit()
	{
		global $bdd;
		
		$requete = $bdd -> prepare( "SELECT * FROM article WHERE id_art = ".$_GET['id']."");
		
		
		$requete -> execute();
		
		return $requete -> fetchAll();
	}

function EditArticle($titre,$description,$statut)
	{
		global $bdd;
		
				$sql = " UPDATE article SET titre = '".$titre."', description = '".$description."', statut = '".$statut."' WHERE id_art =".$_GET['id'];
				$req = $bdd -> prepare($sql);
				
				
				
				
				$req -> execute();
				return true;
		}
		

?>