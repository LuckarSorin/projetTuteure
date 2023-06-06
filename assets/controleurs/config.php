<?php

    define('SERVER','localhost');
    define('USER','eho_Admin');
    define('PASSWD','(;b7MBsv?9rr');
    define('DB','eho_Save');

    try {
        $conn = new PDO("mysql:host=".SERVER.";dbname=".DB,USER,PASSWD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erreur de connexion: " . $e->getMessage());
    }

?>
