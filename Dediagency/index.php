<?php 

	require_once("models/connect.php");

	if(isset($_GET["page"]))
	{
		if (file_exists("controllers/".$_GET["page"].".php"))
		{
			
				if ($_GET["page"] == "pageprincipale")
				{
					$_GET['page'] = "pageprincipale";
				}
				
				else
				{
					$_GET['page'] = $_GET["page"];
				}
			
        }
		
		else
		{
			$_GET['page'] = "404";
		}
	}
    else
	$_GET['page'] = "pageprincipale";


        ob_start();
	       include "controllers/".$_GET['page'].".php";
	           $contenu = ob_get_contents();
        ob_end_clean();	

    require "views/layout.php";



?>