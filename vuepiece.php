<?php
    /*check si connecté*/
    if (isset($_GET['room'])) {
        $piece = $_GET['room'];
        switch ($_GET["room"]) {
            case "Cuisine":
                $piece = "Ma ".$piece;
                break;
            case "Salon":
                $piece = "Mon ".$piece;
                break;
            case "Chambre":
                $piece = "Ma ".$piece;
                break;
            default:
                $piece = "Ma ".$piece;
        }
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>eHo - <?php echo $piece; ?></title>
        <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
        <link rel="icon" type="image/svg" href="assets/img/favicon.svg">
        <script src="assets/js/selection.js"></script>
    </head>

    <body style="display: flex;">

        <div id="menu sidebar">
            <a href="vuemaison.php"><button>Retour à votre maison</button></a>
            <h2>Équipements</h2>

            <ul>
                <li>
                    <button onclick="addEquipment('Télévision')">Télévision</button>
                </li>
                <li>
                    <button onclick="addEquipment('Lumière')">Lumière</button>
                </li>
                <li>
                    <button onclick="addEquipment('Lampe')">Lampe</button>
                </li>

            </ul>
            
            <!--button onclick="toggleSidebar()">Rétracter</button-->
        </div>

        <!--button><a> ← </a></button-->

        <div class="fond_sombre">

            <div class="piece" id="content">
                <h1><?php echo $piece; ?></h1>

                <div id="room-container" class="container">

                </div>
            </div>

        </div>

    </body>
</html>