/** Sélection des configurations en JQuery */
$(document).ready(function() {
    getInclude("global");
    
    // Fonction qui appelle via AJAX le fichier ajax_visufacture_includes.php qui s'occupe de [...]
    function getInclude(number) {
        jQuery.ajax({
            type: "POST",
            url: "assets/ajax/ajax_visufacture_includes.php",
            dataType: "text",
            data: {
                getInclude : number
            },
            success: function(response) {
                console.log(response);
                $("main").load(response);
            }
        });
        console.log("AJAX DONE");
    }
    
    $('p.ajax_include').on('click', function(){
        $this = $(this);
        getInclude($this.attr('class').substr($this.attr('class').indexOf(" ") + 1));
    });
});