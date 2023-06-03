<?php
    /*check si connecté*/
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>eHo - Votre maison</title>
        <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
        <link rel="icon" type="image/svg" href="assets/img/favicon.svg">
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <!--script src="assets/js/MyCharts.js"></script-->
        <script src="assets/js/visufacture.js"></script>
    </head>
    <body>

        <div id="menuvisu">

            <a href="./"><h2> eHo </h1></a>
            <button onclick="changeInclude('source');"><a> Consommation par type de source </a></button>
            <button onclick="changeInclude('piece');"><a> Consommation par type de pièce </a></button>
            <button onclick="changeInclude('facture');"><a> Facture </a></button>
            <button onclick="changeInclude('global');"><a> Vue globale </a></button>

            <button><a href="selectionpiece.php"> Retour à la configuration </a></button>

        </div>

        <div class="visu">

            <h2 class="titrevisu"> Facture pour cette configuration </h2>

            <div>

            <?php include("includes/graphetypepiece.php"); ?>

            <br/>

            <?php include("includes/graphetypesource.php"); ?>

            </div>

        </div>

    </body>
</html>