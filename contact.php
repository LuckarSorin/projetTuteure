<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'phpmailer/PHPMailer/src/Exception.php';
    require 'phpmailer/PHPMailer/src/PHPMailer.php';
    require 'phpmailer/PHPMailer/src/SMTP.php';
    
    if (isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["message"]) && isset($_POST["envoyer"])) {
        /* Extraction des données */
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        
        /* Envoi de la demande de contact */
        //TODO
        
        /* Envoi du mail de validation de la demande de contact */
        $destinataire_nom = $nom;
        $destinataire_email = $email;
        $expediteur_nom = 'eSTeam';
        $expediteur_email = 'contact@esteam.mmi-velizy.fr';
        $objet = "Formulaire de contact envoyé - eSTeam";
        $message = '<html><head><style>footer p {color: red;}</style></head><body><h1>Bonjour '.$nom.' !</h1><br><p>Nous avons bien reçu votre demande de contact : '.$message.'</p><p>Notre équipe vous répondra dans les meilleurs délais.</p><br><p>Si vous souhaitez ajouter des informations à votre demande, n\'hésitez pas à nous écrire en répondant à ce mail ou à l\'adresse : <a href="mailto:contact@esteam.mmi-velizy.fr">contact@esteam.mmi-velizy.fr</a></p><br><p>Cordialement,</p><br><p>L\'équipe eSTeam</p><footer><hr><p>eSTeam - <a href="https://www.esteam.mmi-velizy.fr/" target="_blank" rel="noopener noreferrer nofollow">https://www.esteam.mmi-velizy.fr/</a></p></footer></body></html>';
        
        $smtp_serveur = 'esteam.mmi-velizy.fr';
        $smtp_port = 587; // or 465 for SSL/TLS encryption
        $smtp_utilisateur = 'contact@esteam.mmi-velizy.fr';
        $smtp_mdp = 'BoCNR3-NvnQ11m$pKg';
        
        /* PHPMailer */
        $mail = new PHPMailer();
        
        $mail->isSMTP();
        $mail->Host = $smtp_serveur;
        $mail->Port = $smtp_port;
        $mail->SMTPAuth = true;
        $mail->Username = $smtp_utilisateur;
        $mail->Password = $smtp_mdp;
        
        /* Remplissage des infos de l'email */
        $mail->setFrom($expediteur_email, $expediteur_nom);
        $mail->addAddress($destinataire_email, $destinataire_nom);
        $mail->Subject = $objet;
        $mail->Body = $message;
        $mail->CharSet = "UTF-8";
        $mail->isHTML(true);
        
        /* Vérification des erreurs */
        if ($mail->send()) {
            header('Location: https://www.esteam.mmi-velizy.fr');
            exit();
        } else {
            header("refresh:2; url=https://www.esteam.mmi-velizy.fr");
            echo "<p>Une erreur est survenue. Votre mail n'a pas été envoyé.</p>";
            echo "<p>Redirection en cours...</p>";
            //echo 'Email sending failed. Error: ' . $mail->ErrorInfo;
        }
        
    }
    else {
        header('Location: https://www.esteam.mmi-velizy.fr/#contact');
        exit();
    }
?>