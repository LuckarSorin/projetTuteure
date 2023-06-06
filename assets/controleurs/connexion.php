<?php

    session_start();
    require_once 'config.php';

    if (isset($_POST['nom']) && isset($_POST['mot_de_passe'])) {
        $nom = $_POST['nom'];
        $mot_de_passe = $_POST['mot_de_passe'];

        $sql = "SELECT id_Utilisateur, motDePasse FROM Utilisateur WHERE nomUtilisateur = :nom";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $mot_de_passe_hash = $row['motDePasse'];

            if (password_verify($mot_de_passe, $mot_de_passe_hash)) {
                $_SESSION['id'] = $row['id_Utilisateur'];
                $_SESSION['nom'] = $nom;
                header("Location: ../../accueil.php");
                echo "Bon mot de passe"; //jamais affiché camarade !
            } else {
                header("Location: ../../connexion.php?r=1");
            }
        } else {
            header("Location: ../../connexion.php?r=2");
        }
    }

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
