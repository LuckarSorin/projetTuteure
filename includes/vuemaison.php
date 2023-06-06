<?php
    if (isset($_GET["habitat"])) {
        $get_habitat = $_GET["habitat"];
    }
    else {
        $get_habitat = "1";
    }

    if (isset($_GET["habitants"])) {
        $get_habitants = $_GET["habitants"];
    }
    else {
        $get_habitants = "1";
    }
?>
<div class="flex menu">
    <aside class="fond_sombre flex menu">
        <p onclick="addRoom('Cuisine', 'assets/img/pieces/cuisine-titre.png', 'Cuisine', '?habitat=<?php echo $get_habitat ?>&habitants=<?php echo $get_habitants ?>&piece=1'); return false;">Cuisine</p>
        <p onclick="addRoom('Salon', 'assets/img/pieces/Salon-titre.png', 'Salon', '?habitat=<?php echo $get_habitat ?>&habitants=<?php echo $get_habitants ?>&piece=2'); return false;">Salon</p>
        <p onclick="addRoom('Salle de bain', 'assets/img/pieces/Salle_de_bain-titre.png', 'Salle de bain', '?habitat=<?php echo $get_habitat ?>&habitants=<?php echo $get_habitants ?>&piece=3'); return false;">Salle de bain</p>
        <p onclick="addRoom('Buandrie', 'assets/img/pieces/Buandrie-titre.png', 'Buandrie', '?habitat=<?php echo $get_habitat ?>&habitants=<?php echo $get_habitants ?>&piece=4'); return false;">Buandrie</p>
        <p onclick="addRoom('Chambre', 'assets/img/pieces/chambre-titre.png', 'Chambre', '?habitat=<?php echo $get_habitat ?>&habitants=<?php echo $get_habitants ?>&piece=5'); return false;">Chambre</p>
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