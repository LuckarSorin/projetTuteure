<div class="flex menu">
    <aside class="fond_sombre flex menu">
        <h2>Pièces</h2>

        <p onclick="addRoom('Cuisine', 'cuisine-titre.png', 'Cuisine'); return false;">Cuisine</p>
        <p onclick="addRoom('Salon', 'Salon-titre.png', 'Salon'); return false;">Salon</p>
        <p onclick="addRoom('Salle de bain', 'Salle_de_bain-titre.png', 'Salle de bain'); return false;">Salle de bain</p>
        <p onclick="addRoom('Buandrie', 'Buandrie-titre.png', 'Buandrie'); return false;">Buandrie</p>
        <p onclick="addRoom('Chambre', 'chambre-titre.png', 'Chambre'); return false;">Chambre</p>

        <div class="retour">
            <p class="retour"><a href="visufacture.php">Simuler</a></p>
        </div>
    </aside>

    <main class="accueil">
        <div class="maison" id="content">
            <div id="room-container" class="container"></div>
        </div>
    </main>
</div>