<?php
// Démarrez la session au début du script
session_start();

$secretKey = "6LcCFJUqAAAAAFO-VW4MlBgxxr50qXbQlkFXFvm9";

// Vérifiez si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifiez la réponse de reCAPTCHA
    if (!empty($_POST['g-recaptcha-response'])) {
        $recaptchaResponse = $_POST['g-recaptcha-response'];

        // Effectuez une requête vers l'API reCAPTCHA
        $verifyUrl = "https://www.google.com/recaptcha/api/siteverify";
        $response = file_get_contents($verifyUrl . "?secret=" . $secretKey . "&response=" . $recaptchaResponse);
        $responseKeys = json_decode($response, true);

        // Vérifiez le score retourné par reCAPTCHA
        if ($responseKeys["success"] && $responseKeys["score"] >= 0.5) {
            // Validation côté serveur
            if (empty($_POST['name']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || empty($_POST['message'])) {
                $_SESSION['feedback'] = 'Veuillez remplir tous les champs correctement.';
                $_SESSION['feedback_type'] = 'error';
            } else {
                // Assainissez et assignez les variables
                $name = htmlspecialchars($_POST['name']);
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                $message = htmlspecialchars($_POST['message']);
                $to = "va.comparato@gmail.com";
                $subject = "Message du formulaire de contact";

                // Adresse d'expédition fixe
                $from = "contact@vincentcomparato.fr";

                // Prévention de l'injection d'en-têtes
                if (preg_match("/\r|\n/", $name) || preg_match("/\r|\n/", $email)) {
                    $_SESSION['feedback'] = 'Entrée invalide détectée.';
                    $_SESSION['feedback_type'] = 'error';
                } else {
                    // Préparez les en-têtes
                    $headers = "From: " . $from . "\r\n" .
                        "Reply-To: " . $email . "\r\n" .
                        "X-Mailer: PHP/" . phpversion();

                    // Envoyez le mail
                    if (mail($to, $subject, $message, $headers)) {
                        $_SESSION['feedback'] = 'Votre message a bien été envoyé.';
                        $_SESSION['feedback_type'] = 'success';
                    } else {
                        $_SESSION['feedback'] = 'Erreur lors de l\'envoi du message.';
                        $_SESSION['feedback_type'] = 'error';
                    }
                }
            }
        } else {
            $_SESSION['feedback'] = 'Échec de la vérification reCAPTCHA.';
            $_SESSION['feedback_type'] = 'error';
        }
    } else {
        $_SESSION['feedback'] = 'La vérification reCAPTCHA est requise.';
        $_SESSION['feedback_type'] = 'error';
    }

    header("Location: /"); // Ajustez le chemin vers votre formulaire
    exit;
}
