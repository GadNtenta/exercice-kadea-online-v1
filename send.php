<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validation de l'adresse email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Format d'email invalide";
        exit;
    }

    $destinataire = "gadntenta404@gmail.com";

    $sujet = "Nouveau message de $nom";

    $corps = "Nom : $nom\n";
    $corps .= "Email : $email\n";
    $corps .= "Message :\n$message\n";


    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($destinataire, $sujet, $corps, $headers)) {
        echo "Message envoyé avec succès !";
    } else {
        echo "Échec de l'envoi du message.";
    }
} else {
    echo "Requête invalide.";
}
?>
