<div class="container">
   <a href="admin">Retourner aux articles</a>
    <h1>Création d'article</h1>
    <form method="post" action="#" enctype="multipart/formdata">
        <div class="input-field col s12 m12 l12">
            <input id="titre" type="text" class="validate" name="titre">
            <label for="titre">titre</label>
        </div>
        <div class="input-field col s12">
            <textarea name="description" id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">description</label>
        </div>
        <div class="switch">
            <p>
                <input name="choix" type="radio" id="test1" value="on" />
                <label for="test1">Actif</label>
                <input name="choix" type="radio" id="test2" value="off" />
                <label for="test2">Désactivé</label>
            </p>
        </div>
        <button class="waves-effect waves-light btn blue accent-1 right col l3 s10 m8 pull-m1 pull-s1" type="submit" name="submit"> Envoyer <i class="material-icons right">send</i> </button>
    </form>
</div>