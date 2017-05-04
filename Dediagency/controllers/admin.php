<?php 

	/*********************     CONTROLLER  *****************************/
	
	
	require_once ("models/admin.php");
	
    $donn = ChercherArticle();

if(isset($_GET["del"]))
    
    {
        if(SupprimerArticle($_GET["del"]))
            {
                echo"erreur";
            }
        else{
                header("Location:admin");
            }
    }
	require_once("views/admin.php");

?>