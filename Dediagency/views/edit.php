<div class="container">
   <a href="admin">Retouner aux articles</a>
    <?php foreach($donn as $edit){ ?>
        <form action='#' method='post' enctype='multipart/form-data'>
            <input type='text' name='titre' placeholder="titre" value="<?php echo $edit['titre']; ?>">
            <br>
            <input type='text' name='description' placeholder="description" value="<?php echo $edit['description']; ?>">
            <br>
            <div class="switch">
                <p>
                    <input name="choix" type="radio" id="test1" value="on" />
                    <label for="test1">Actif</label>
                    <input name="choix" type="radio" id="test2" value="off" />
                    <label for="test2">Désactivé</label>
                </p>
            </div>
            <input class='btn btn-primary btn-primary' type='submit' name='edit' value="Editer" /> </form>
        </br>
        <label for="titre">Titre : </label>
        <?php echo " ".$edit['titre']; ?>
            <br>
            <label for="description">Description : </label>
            <?php echo  " ".$edit['description']; ?>
                <br>
            <label for="satut">Statut : </label>
            <?php echo  " ".$edit['statut']; ?>
                <br> </form>
</div>
<?php } ?>