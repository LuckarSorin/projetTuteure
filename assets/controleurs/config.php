<?php
define('SERVER','');
define('USER','');
define('PASSWD');
define('DB','');

try {
    $conn = new PDO("mysql:host=".SERVER.";dbname=".DB,USER,PASSWD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion: " . $e->getMessage());
}

?>
