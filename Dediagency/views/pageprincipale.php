<div class="container">
    <h2>Les articles</h2>
    
    <?php if(!empty($donnees)){ foreach($donnees as $articles){
    
    
    echo "<h1>".$articles["titre"]."</h1><br>";
    echo "<a href='article&id=".$articles["id_art"]."'>Voir plus</a><br>";
    echo $articles["description"];
    
    
}}else{echo"aucun article !";} ?>

    




</div>