<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>DediAgency</title>
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/ico.ico"> </head>

<body>
    <header class="container">
        <nav>
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="#!">Où suis-je ?</a></li>
            </ul>
            <div class="nav-wrapper"> <a href="pageprincipale" class="brand-logo">DediAgency</a> <a href="pageprincipale" data-activates="mobile-demo" class="button-collapse"><i
					class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <?php if(isset($_SESSION["connecte"])){ ?>
                        <li><a href="deconnexion"><i
							class="material-icons left">highlight_off</i>Deconnexion</a></li>
                        <?php } else { ?>
                            <li><a href="identification"><i
							class="material-icons left">highlight_off</i>Connexion</a></li>
                            <?php } ?>
                                <?php if(isset($_SESSION["connecte"])){ ?>
                                <li><a href="admin"><i
							class="material-icons left">home</i>Administration</a></li>
                               <?php } ?>
                                <li class="active"><a href="pageprincipale"><i
							class="material-icons left">home</i>Accueil</a></li>
                                <li><a target="_blank" href="images/portail_utilisateur_formation.pdf">
                                 <i class="material-icons left">help_outline</i>Aides</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="deconnexion"><i
							class="material-icons left">highlight_off</i>Deconnexion</a></li>
                    <li><a href="admin"><i
							class="material-icons left">home</i>Admin</a></li>
                    <li class="active"><a href="pageprincipale"><i
							class="material-icons left">home</i>Accueil</a></li>
                    <li><a target="_blank" href="images/portail_utilisateur_formation.pdf"><i 
               	            class="material-icons left">help</i>Aide</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <?= $contenu?>
        <script src="js/jquery.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="materialize/js/materialize.js"></script>
        <script src="js/script.js"></script>
</body>

</html>