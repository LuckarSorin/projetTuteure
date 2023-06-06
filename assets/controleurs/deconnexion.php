<?php
    /* script de deconnection*/

    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
    if (isset($_SESSION["id"])){
        $_SESSION['id']= NULL;
        unset($_SESSION['id']);
        session_destroy();
    }
    header('Location: ../../index.php');

?>