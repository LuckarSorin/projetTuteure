<?php
    /*si connecté renvoie à home.php*/
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>eHo - Configurez, Visualisez, Économisez !</title>
        <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
        <link rel="icon" type="image/svg" href="assets/img/favicon.svg">
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>-->
    </head>
    <body class="fond_sombre">
        <div class="accueil_centre">
            <div class="flex flex_colonne">
                <div class="flex bandeau_superieur">
                    <img src="assets/img/placeholder.png" alt="Logo de l'application eHo">
                </div>
                <div class="flex hover_decoration">
                    <hr>
                    <h2 class="center"><a href="./home.php">JOUER</a></h2>
                    <hr>
                </div>
                <div>
                    <div class="flex hover_decoration">
                        <hr>
                        <p class="center"><a href="seconnecter.php">Connexion</a></p>
                        <hr>
                    </div>
                    <div class="flex hover_decoration">
                        <hr>
                        <p class="center"><a href="creationcompte.php">Créer un compte</a></p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
