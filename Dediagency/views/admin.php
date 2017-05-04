<div class="container">
    <div class="content-box-large">
        <h1>Les articles</h1>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>#</td>
                            <TD>Titre</TD>
                            <td>Description</td>
                            <td>Statut</td>
                            <td>Editer</td>
                            <td>Supprimer</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
    
    foreach($donn as $article)
                {
                    ?>
                            <TR>
                                <TD align="center">
                                    <?php echo $article['id_art']; ?>
                                </TD>
                                <TD align="center">
                                    <?php echo $article['titre']; ?>
                                </TD>
                                <TD align="center">
                                    <?php echo $article['description']; ?>
                                </TD>
                                <TD align="center">
                                    <?php echo $article['statut']; ?>
                                </TD>
                                <?php
                        echo "<TD align='center'><a href='edit&id=".$article['id_art']."'><button class='btn btn-danger btn-sm'>Modifier</button></a></TD>";
                        echo "<TD align='center'><a href='admin&del=".$article['id_art']."'><button class='btn btn-danger btn-sm'>X</button></a></TD>";}?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="ajoutarticle"><button class='btn btn-danger btn-sm'>Ajouter un article</button></a>
</div>