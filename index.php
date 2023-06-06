<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>eHo - Configurez, Visualisez, Économisez !</title>
        <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
        <link rel="icon" type="image/svg" href="assets/img/favicon.svg">
    </head>
    <body class="fond_sombre">

        <aside id="news">
            <div></div>
        </aside>

        <div class="accueil_centre">
            <div class="flex flex_colonne">
                <a class="Info" href="https://esteam.mmi-velizy.fr/"><button class="Info">I</button></a>

                <div class="flex bandeau_superieur">
                    <a href="./">
                        <img class="width" src="assets/img/logo_left.svg" alt="Logo de l'application eHo">
                    </a>
                </div>
                <div class="flex hover_decoration">
                    <hr>
                    <h1 class="center"><a href="jeu.php"> SIMULER </a></h1>
                    <hr>
                </div>
                    <?php
                        if(isset($_GET['r'])){
                            if($_GET['r']==0){
                                echo "
                                <div class='erreurlog'>
                                    Inscription réussie. Tu peux maintenant te connecter.
                                </div>";
                            }
                        }
                    ?>
                <div>
                    <div class="flex hover_decoration">
                        <hr>
                        <p class="center"><a href="./connexion.php"> Connexion </a></p>
                        <hr>
                    </div>
                    <div class="flex hover_decoration">
                        <hr>
                        <p class="center"><a href="inscription.php"> Créer un compte </a></p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

        <aside id="updates">
            <div></div>
        </aside>

    </body>
</html>
