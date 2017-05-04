<?php 

/* ****************    MODEL **********************/

	


function AjoutArticle($titre,$description,$statut)
	{
		global $bdd;
		
				$sql = " INSERT INTO article VALUES ('',:titre,:description,:statut)";
				$req = $bdd -> prepare($sql);
				
				$req -> bindValue(":titre",$titre,PDO::PARAM_STR);
                $req -> bindValue(":description",$description,PDO::PARAM_STR);
				
				$req -> bindValue(":statut",$statut,PDO::PARAM_STR);
				
				
				$req -> execute();
				return true;
		}
		

		
		
		
		
	
?>


             