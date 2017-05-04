<?php 

/* ****************    MODEL **********************/

	
function ChercherArticle()
	{
		global $bdd;
		
		$requete = $bdd -> prepare( "SELECT * FROM article WHERE id_art = ".$_GET['id']."");
		
		
		$requete -> execute();
		
		return $requete -> fetchAll();
	}
function ChercherCommentaire()
	{
		global $bdd;
		
		$requete = $bdd -> prepare( "SELECT * FROM commentaire WHERE id_art = ".$_GET['id']."");
		
		
		$requete -> execute();
		
		return $requete -> fetchAll();
	}


function AjoutCommentaire($titre,$contenu,$id_art)
	{
		global $bdd;
		
				$sql = " INSERT INTO commentaire VALUES ('',:titre,:contenu,:id_art)";
				$req = $bdd -> prepare($sql);
				
				$req -> bindValue(":titre",$titre,PDO::PARAM_STR);
                $req -> bindValue(":contenu",$contenu,PDO::PARAM_STR);
				
				$req -> bindValue(":id_art",$id_art,PDO::PARAM_INT);
				
				
				$req -> execute();
				return true;
		}
		
		
		
		
		
	
?>


             