<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>eHo - Mon habitation</title>
        <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
        <link rel="icon" type="image/svg" href="assets/img/favicon.svg">
        <script src="assets/js/selection.js"></script>
    </head>

    <body style="display: flex;">

        <div id="sidebar">
            <a href="accueil.php"><button>Retour à l'accueil</button></a>
            <h2>Pièces</h2>

            <div class="menu-item">
                <a href="#" onclick="addRoom('Cuisine', 'Cuisine-titre.png', 'Cuisine'); return false;">Cuisine</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addRoom('Salon', 'Salon-titre.png', 'Salon'); return false;">Salon</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addRoom('Salle de bain', 'Salle_de_bain-titre.png', 'Salle de bain'); return false;">Salle de bain</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addRoom('Buandrie', 'Buandrie-titre.png', 'Buandrie'); return false;">Buandrie</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addRoom('Chambre', 'Chambre-titre.png', 'Chambre'); return false;">Chambre</a>
            </div>

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
                <a class="visualisation" href="visufacture.php">
                    <button class="visualisation"> Simuler </button>
                </a>
            </div>

        </div>

    </body>
</html>
