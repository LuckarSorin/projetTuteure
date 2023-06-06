<?php
    if (isset($_GET['room'])) {
        $piece = $_GET['room'];
        switch ($piece) {
            case "Cuisine" || "Salle de bain" || "Buandrie" || "Chambre":
                $piece = "Ma ".$piece;
                break;
            case "Salon":
                $piece = "Mon ".$piece;
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
        <h2>Appareils</h2>

        <p onclick="addEquipment('Ballon deau chaude', 'Ballon deau chaude.png', 'Ballon deau chaude'); return false;">Ballon d'eau chaude</p>
        <p onclick="addEquipment('Boitier internet', 'Boitier internet.png', 'Boitier internet'); return false;">Boitier internet</p>
        <p onclick="addEquipment('Borne voiture éléctrique', 'Borne voiture éléctrique.png', 'Borne voiture éléctrique'); return false;">Borne voiture éléctrique</p>
        <p onclick="addEquipment('Climatiseur', 'Climatiseur.png', 'Climatiseur'); return false;">Climatiseur</p>
        <p onclick="addEquipment('Lampe', 'Lampe.png', 'Lampe'); return false;">Lampe</p>
        <p onclick="addEquipment('Lave-vaisselle', 'Lave-vaisselle.png', 'Lave-vaisselle'); return false;">Lave-vaisselle</p>
        <p onclick="addEquipment('Micro-onde', 'Micro-onde.png', 'Micro-onde'); return false;">Micro-onde</p>
        <p onclick="addEquipment('PC fixe', 'PC fixe.png', 'PC fixe'); return false;">PC fixe</p>
        <p onclick="addEquipment('Plafonnier', 'Plafonnier.png', 'Plafonnier'); return false;">Plafonnier</p>
        <p onclick="addEquipment('Pompe à chaleur', 'Pompe à chaleur.png', 'Pompe à chaleur'); return false;">Pompe à chaleur</p>
        <p onclick="addEquipment('Radiateur', 'Radiateur.png', 'Radiateur'); return false;">Radiateur</p>
        <p onclick="addEquipment('Réfrigirateur', 'Réfrigirateur.png', 'Réfrigirateur'); return false;">Réfrigirateur</p>
        <p onclick="addEquipment('TV', 'TV.png', 'TV'); return false;">Télévision</p>
        
        <div class="retour">
            <p class="retour"><a href="javascript:history.back()">Retour à ma maison</a></p>
        </div>
    </aside>

    <main class="accueil">
        <div class="maison" id="content">
            <h1><?php echo $piece; ?></h1>

            <div id="room-container" class="container">

            </div>
        </div>
    </main>
</div>