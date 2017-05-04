<?php 

	/*********************     CONTROLLER  *****************************/
	
	
	require_once ("models/ajoutarticle.php");
	

if (isset($_POST["submit"]))
 {
     
     extract($_POST);
  
        if (!empty($titre)  && !empty($description)  && !empty($choix))
            {
                 if($choix == "on")
                        $statut = "actif";
                    else
                        $statut = "désactivé";
               
                     if(AjoutArticle($titre,$description,$statut))
                            {
                            echo "<h1>Article ajouté !</h1>";
                            }
                     else
                            {
                            echo"<h1>Echec de l'ajout de l'article !</h1>";
                            }
                   
            }
        else
            {
            echo "<h1>Tous les champs doivent être remplis</h1>";
            }
    }
 
	require_once("views/ajoutarticle.php");

?>