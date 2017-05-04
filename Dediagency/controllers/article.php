<?php 

	/*********************     CONTROLLER  *****************************/
	
	
	require_once ("models/article.php");
	
    $donn = ChercherArticle();
    $donnees = ChercherCommentaire();

if (isset($_POST["submit"]))
 {
     extract($_POST);
  
        if (!empty($titre)  && !empty($contenu))
            {
              
                     if(AjoutCommentaire($titre,$contenu,$_GET['id']))
                            {
                                
                            }
                     else
                            {
                            echo"<h1>Echec de l'ajout du commentaire !</h1>";
                            }
                   
            }
        else
            {
            echo "<h1>Tous les champs doivent être remplis</h1>";
            }
    }
 
	require_once("views/article.php");

?>