<?php
    /*si connecté renvoie à home.php*/
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>eHo - Accueil</title>
        <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
        <link rel="icon" type="image/svg" href="img/favicon.svg">
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>-->
    </head>
    <body class="fond_sombre">
        <div id="misesajour"></div>
        
        <div class="accueil_centre">
            <div class="flex_colonne">
                <div class="flex bandeau_superieur">
                    <h3>eHo</h3>
                    <img src="img/placeholder.png" alt="Logo de l'application eHo">
                </div>
                <div class="flex hover_decoration">
                    <hr>
                    <h2><a href="./home.php">JOUER</a></h2>
                    <hr>
                </div>
                <div>
                    <div class="flex hover_decoration">
                        <hr>
                        <p><a href="seconnecter.php">Connexion</a></p>
                        <hr>
                    </div>
                    <div class="flex hover_decoration">
                        <hr>
                        <p><a href="creationcompte.php">Créer un compte</a></p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="infos"></div>
    </body>
</html>