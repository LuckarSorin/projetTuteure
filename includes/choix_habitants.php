<?php
    if (isset($_GET["habitat"])) {
        $get_habitat = $_GET["habitat"];
    }
    else {
        $get_habitat = "1";
    }
?>
<main class="jeu">
    <h2 class="center">Sélectionne le nombre d'habitants du foyer</h2>
    <section>
        <div class="selection">
            <div class="flex images">
                <figure class="selected">
                    <figcaption class="center">1</figcaption>
                </figure>
                <figure>
                    <figcaption class="center">2</figcaption>
                </figure>
                <figure>
                    <figcaption class="center">3</figcaption>
                </figure>
                <figure>
                    <figcaption class="center">4</figcaption>
                </figure>
                <figure>
                    <figcaption class="center">5</figcaption>
                </figure>
                <figure>
                    <figcaption class="center">6</figcaption>
                </figure>
                <figure>
                    <figcaption class="center">7</figcaption>
                </figure>
                <figure>
                    <figcaption class="center">8</figcaption>
                </figure>
                <figure>
                    <figcaption class="center">9</figcaption>
                </figure>
            </div>
            <div class="flex curseur">
                <input type="range" min="1" max="9" value="1">
            </div>
            <div class="bouton">
                <div class="flex hover_decoration">
                    <hr>
                    <p class="center"><a href="?habitat=<?php echo $get_habitat ?>&habitants=1">Suivant</a></p>
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
        $(document).on("input change", "div.selection .curseur input", function() {
            $("div.selection .images figure").removeClass("selected");
            var nbhabitants = $("div.selection .curseur input").val();
            $("div.selection .bouton a").attr("href", "?habitat=<?php echo $get_habitat ?>&habitants=" + nbhabitants);
            $("div.selection .images figure").eq(nbhabitants-1).addClass("selected");
        });

        // En fonction de l'image cliquée
        $("div.selection .images figure").click(function(){
                $("div.selection .images figure").removeClass("selected");
                $(this).addClass("selected");
                for (i = 1; i < 10; i++) {
                    if ($("div.selection .images figure").eq(i-1).hasClass("selected")) {
                        $("div.selection .curseur input").val(i);
                        $("div.selection .bouton a").attr("href", "?habitat=<?php echo $get_habitat ?>&habitants=" + i);
                    }
                }
            });
    });
    </script>
</main>