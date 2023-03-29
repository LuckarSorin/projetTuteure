<?php
session_start();
require_once 'config.php';

if (isset($_POST['nom']) && isset($_POST['mot_de_passe'])) {
    $nom = $_POST['nom'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $sql = "SELECT id_Utilisateur, motDePasse FROM Utilisateur WHERE nom = :nom";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $mot_de_passe_hash = $row['mot_de_passe'];

        if (password_verify($mot_de_passe, $mot_de_passe_hash)) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['nom'] = $nom;
            header("Location: page_Utilisateur.php");
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Nom d'utilisateur introuvable.";
    }
}
?>
