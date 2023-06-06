<?php
    //TODO verifier si connecté
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>eHo - Accueil</title>
        <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
        <link rel="icon" type="image/svg" href="assets/img/favicon.svg">
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/ajax_accueil.js"></script>
    </head>

    <body class="fond_sombre flex">
        <aside class="fond_sombre flex menu">
            <figure class="eho">
                <a href="./">
                    <img src="assets/img/logo_bottom.svg" alt="eHo" title="eHo">
                </a>
            </figure>

            <p><a href="jeu.php">Nouvelle simulation</a></p>
            <p class="ajax_include compte">Mon compte</p>
            <p class="ajax_include sauvegarde">Mes sauvegardes</p>
            <p class="ajax_include parametre">Paramètres</p>
            
            <div class="retour">
                <p class="retour"><a href="./assets/controleurs/deconnexion.php">Me deconnecter</a></p>
            </div>
        </aside>

        <main class="accueil">

        </main>
    </body>
</html>
