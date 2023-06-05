<?php
    /*check si connecté*/
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Salon</title>
    <link rel="stylesheet" type="text/css" href="stylesheet/styleMaison.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
    <script src="assets/js/selection.js"></script>
</head>
<body>
    <div id="sidebar">
        <h2>Équipements</h2>
        <ul>
            <li>
                <button onclick="addEquipment('Télévision')">Télévision</button>
            </li>
            <li>
                <button onclick="addEquipment('Lumière')">Lumière</button>
            </li>
            <li>
                <button onclick="addEquipment('Lampe')">Lampe</button>
            </li>

        </ul>
        <button onclick="toggleSidebar()">Rétracter</button>
    </div>

    <div id="content">
        <h1>Salon</h1>

        <div id="room-container" class="container">

        </div>
    </div>
</body>
</html>
