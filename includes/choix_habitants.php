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
                <p class="center"><a href="?habitants=5">Suivant</a></p>
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
        var idhabitat = $("div.selection .curseur input").val();
        $("div.selection .bouton a").attr("href", "?habitat=" + idhabitat);
        $("div.selection .images figure").eq(idhabitat - 1).addClass("selected");
    });
});
</script>