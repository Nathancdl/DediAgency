<?php 

	/*********************     CONTROLLER  *****************************/
	
	
	require_once ("models/edit.php");
	
    $donn = ChercherEdit();


if(isset($_POST['edit']))
                 {
      
     extract($_POST);
  
        if (!empty($titre)  && !empty($description) && !empty($choix))
            {
                
                    if($choix == "on")
                        $statut = "actif";
                    else
                        $statut = "désactivé";
                     if(EditArticle($titre,$description,$statut))
                            {
                            echo "<h1>Article Modifié !</h1>";
                            }
                     else
                            {
                            echo"<h1>Echec de la modification !</h1>";
                            }
                  
            }
        else
            {
            echo "<h1>Tous les champs doivent être remplis</h1>";
            }
    }
	require_once("views/edit.php");

?>