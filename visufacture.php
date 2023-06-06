<?php
    /*check si connecté*/
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>eHo - Ma facture</title>
        <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
        <link rel="icon" type="image/svg" href="assets/img/favicon.svg">
        <script src="assets/js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script src="./assets/js/ajax_facture.js"></script>
    </head>
    <body class="flex">

        <aside class="fond_sombre flex menu">
            <div class="menuvisu">

                <figure class="eho">
                    <a href="./">
                        <img src="assets/img/logo_bottom.svg" alt="eHo" title="eHo">
                    </a>
                </figure>

                <p class="ajax_include global">Vue globale</p>
                <p class="ajax_include source">Consommation par type de source</p>
                <p class="ajax_include piece">Consommation par type de pièce</p>
                <p class="ajax_include facture">Facture</p>

                <div class="retour">
                    <p class="retour"><a href="vuemaison.php">Retour à la configuration</a></p>
                </div>
                
            </div>
        </aside>

        <div class="visu accueil">
            <nav class="flex fond_sombre accueil">

                <figure class="profil vide"></figure>
                <h3 class="center">Mes Statistiques</h3>

                <figure class="profil">
                    <a href="./accueil.php">
                        <img src="assets/img/login.svg" alt="Mon profil" title="Mon profil">
                    </a>
                </figure>

            </nav>

        <main class="graphe">
        </main>

        </div>
        
    </body>
</html>