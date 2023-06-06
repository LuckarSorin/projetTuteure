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
<div id="sidebar">
    <a href="vuemaison.php"><button>Retour à votre maison</button></a>
    <h2>Équipements</h2>
    
    <div class="menu-item">
        <a href="#" onclick="addEquipment('Télévision')">Télévision</a>
    </div>
    <div class="menu-item">
        <a href="#" onclick="addEquipment('Lumière')">Lumière</a>
    </div>
    <div class="menu-item">
        <a href="#" onclick="addEquipment('Lampe')">Lampe</a>
    </div>

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