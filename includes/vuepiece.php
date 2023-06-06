<?php
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
    else {
        $piece = "Ma pièce";
    }
?>
<div class="flex menu">
    <aside class="fond_sombre flex menu">
        <p onclick="addEquipment('Télévision')">Télévision</p>
        <p onclick="addEquipment('Lumière')">Lumière</p>
        <p onclick="addEquipment('Lampe')">Lampe</p>
        <div class="retour">
            <p class="retour"><a href="visufacture.php">Visualiser</a></p>
        </div>
    </aside>
    <main class="accueil">
        <div class="maison" id="content">
            <div id="room-container" class="container"></div>
        </div>
    </main>
</div>