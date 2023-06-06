<?php
    /* script de deconnection*/

    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
    if (isset($_SESSION["connected"])){
        session_destroy();
        unset($_SESSION['connected']);
        $_SESSION['connected']= NULL;
    }
    header('Location: ../../index.php');

?>