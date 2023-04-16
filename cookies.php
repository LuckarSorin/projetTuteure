<?php
    $isCookieSet = false;
    if (isset($_POST["isGoogleMapsCookiesAccepted"])) {
        setcookie("isGoogleMapsCookiesAccepted", $_POST["isGoogleMapsCookiesAccepted"], time()+6*30*24*60*60);
        $isCookieSet = $_POST["isGoogleMapsCookiesAccepted"];
    }
    else {
        header('Location: https://www.esteam.mmi-velizy.fr');
        exit();
    }
    echo json_encode($isCookieSet);
?>