<?php
    /*check si connecté*/
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>eHo - Mon habotation</title>
        <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
        <link rel="icon" type="image/svg" href="assets/img/favicon.svg">
        <script src="assets/js/selection.js"></script>
    </head>

    <body style="display: flex;">

        <div id="menu sidebar">
            <a href="accueil.php"><button>Retour à l'accueil</button></a>
            <h2>Pièces</h2>

            <div class="menu-item">
                <a href="#" onclick="addRoom('Cuisine'); return false;">Cuisine</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addRoom('Salon'); return false;">Salon</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addRoom('Chambre'); return false;">Chambre</a>
            </div>

            <!-- Ajoutez d'autres pièces ici avec leurs liens -->
            <!--button onclick="toggleSidebar()">Rétracter</button-->
        </div>

        <!--button><a> ← </a></button-->

        <div class="fond_sombre">

            <div class="maison" id="content">

                <h1>Ma Maison</h1>

                <div id="room-container" class="container">
                    
                </div>
            </div>

            <div class="visualisation">
                <button class="visualisation" href="visufacture.php"> Simuler </button>
            </div>

        </div>

    </body>
</html>