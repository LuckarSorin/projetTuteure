<?php
    if(isset($_GET['room'])){
        $piece = $_GET['room'];
        if($piece == "Cuisine" || $piece == "Salle de bain" || $piece == "Buandrie" || $piece == "Chambre" ){
            $piece = "Ma ".$piece;
        }elseif($piece == "Salon"){
            $piece = "Mon ".$piece;
        }else{
            $piece = "Ma ".$piece;
        }
    }else{
        $piece = "Ma pièce";
    }
    /** la comparaison fonctionne aussi avec :
     *  strcmp($piece,"Salon") == 0 
     *  0 si égal et -1 ou 1 si different */
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

        <div id="sidebar">
            <a href="vuemaison.php"><button>Retour à ma maison</button></a>
            <h2>Appareils</h2>
            
            <div class="menu-item">
                <a href="#" onclick="addEquipment('Ballon deau chaude', 'Ballon deau chaude.png', 'Ballon deau chaude'); return false;">Ballon d'eau chaude</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addEquipment('Boitier internet', 'Boitier internet.png', 'Boitier internet'); return false;">Boitier internet</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addEquipment('Borne voiture éléctrique', 'Borne voiture éléctrique.png', 'Borne voiture éléctrique'); return false;">Borne voiture éléctrique</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addEquipment('Climatiseur', 'Climatiseur.png', 'Climatiseur'); return false;">Climatiseur</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addEquipment('Lampe', 'Lampe.png', 'Lampe'); return false;">Lampe</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addEquipment('Lave-vaisselle', 'Lave-vaisselle.png', 'Lave-vaisselle'); return false;">Lave-vaisselle</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addEquipment('Micro-onde', 'Micro-onde.png', 'Micro-onde'); return false;">Micro-onde</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addEquipment('PC fixe', 'PC fixe.png', 'PC fixe'); return false;">PC fixe</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addEquipment('Plafonnier', 'Plafonnier.png', 'Plafonnier'); return false;">Plafonnier</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addEquipment('Pompe à chaleur', 'Pompe à chaleur.png', 'Pompe à chaleur'); return false;">Pompe à chaleur</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addEquipment('Radiateur', 'Radiateur.png', 'Radiateur'); return false;">Radiateur</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addEquipment('Réfrigirateur', 'Réfrigirateur.png', 'Réfrigirateur'); return false;">Réfrigirateur</a>
            </div>
            <div class="menu-item">
                <a href="#" onclick="addEquipment('TV', 'TV.png', 'TV'); return false;">Télévision</a>
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

    </body>
</html>