<div class="container">
    <?php foreach($donn as $arti){
    
    
    
    
    echo "<h1>".$arti["titre"]."</h1><br>";
    
    echo $arti["description"];
    
    
} if (!isset($_POST["submit"])) { ?>
        <h1>Postez un commentaire</h1>
        <form method="post" action="article&id=<?php echo $arti[" id_art "]?>" enctype="multipart/formdata">
            <div class="input-field col s12 m12 l12">
                <input id="titre" type="text" class="validate" name="titre">
                <label for="titre">titre</label>
            </div>
            <div class="input-field col s12">
                <textarea name="contenu" id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">contenu</label>
            </div>
            <button class="waves-effect waves-light btn blue accent-1 right col l3 s10 m8 pull-m1 pull-s1" type="submit" name="submit"> Envoyer <i class="material-icons right">send</i> </button>
        </form>
        <?php }else {echo"<h1>Commentaire sauvegardé !</h1>";}?>
            <h1>Les commentaires</h1>
            <div class="center">
                <?php foreach($donnees as $commentaire){
    
    
    
    
    echo "<h1>".$commentaire["titre"]."</h1>";
    echo "Par : anonyme<br>";
    
    echo $commentaire["contenu"];
    
    
} ?> </div>
</div>