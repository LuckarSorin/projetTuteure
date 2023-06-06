<main class="jeu">
    <h2 class="center">Pour commencer, sélectionne ton habitation</h2>
    <section>
        <div class="selection">
            <div class="flex images">
                <figure>
                    <img src="assets/img/maison.svg" alt="Maison" title="Maison">
                    <figcaption class="center">Maison</figcaption>
                </figure>
                <figure>
                    <img src="assets/img/appart.svg" alt="Appartement" title="Appartement">
                    <figcaption class="center">Appartement</figcaption>
                </figure>
            </div>
            <div class="flex curseur">
                <input type="range" min="1" max="3" value="2">
            </div>
            <div class="bouton">
                <div class="flex hover_decoration">
                    <hr>
                    <p class="center"><a href="?habitat=2">Suivant</a></p>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <!-- Modifications et fonctionnalités du curseur -->
    <script>
        $(document).ready(function() {
            /* __________ Gestion de la taille du curseur en fonction de la taille de l'écran __________ */
            var distance = ($("div.selection .images figure").last().offset().left) - ($("div.selection .images figure").first().offset().left);
            $("div.selection .curseur").width(distance + 35);
            // En cas de redimensionnement
            $(window).resize(function(){
                var distance = ($("div.selection .images figure").last().offset().left) - ($("div.selection .images figure").first().offset().left);
                $("div.selection .curseur").width(distance + 35);
            });
            
            /* __________ Sélection du bon habitat __________ */
            // En fonction de la position du curseur
            $("div.selection .bouton").css("visibility", "hidden");
            
            $(document).on("input change", "div.selection .curseur input", function() {
                $("div.selection .images figure").removeClass("selected");
                var idhabitat = $("div.selection .curseur input").val();
                $("div.selection .bouton a").attr("href", "?habitat=" + idhabitat);
                if (idhabitat == 2) {
                    $("div.selection .bouton").css("visibility", "hidden");
                }
                else if (idhabitat == 3) {
                    $("div.selection .images figure").last().addClass("selected");
                    $("div.selection .bouton").css("visibility", "visible");
                }
                else {
                    $("div.selection .images figure").first().addClass("selected");
                    $("div.selection .bouton").css("visibility", "visible");
                }
            });
            
            // En fonction de l'image cliquée
            $("div.selection .images figure").click(function(){
                $("div.selection .images figure").removeClass("selected");
                $(this).addClass("selected");
                if ($("div.selection .images figure").first().hasClass("selected")) {
                    $("div.selection .curseur input").val(1);
                    $("div.selection .bouton a").attr("href", "?habitat=1");
                    $("div.selection .bouton").css("visibility", "visible");
                }
                else {
                    $("div.selection .curseur input").val(3);
                    $("div.selection .bouton a").attr("href", "?habitat=3");
                    $("div.selection .bouton").css("visibility", "visible");
                }
            });
        });
    </script>
</main>