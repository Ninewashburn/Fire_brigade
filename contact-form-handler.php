<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération et nettoyage des données
    $name    = trim(strip_tags($_POST['nom']));
    $email   = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = isset($_POST['sujet']) ? trim(strip_tags($_POST['sujet'])) : "Demande d'information";
    $message = trim(strip_tags($_POST['message']));
    
    // Récupération des champs supplémentaires du formulaire de formation
    $prenom = isset($_POST['prenom']) ? trim(strip_tags($_POST['prenom'])) : "";
    $telephone = isset($_POST['telephone']) ? trim(strip_tags($_POST['telephone'])) : "";
    $formation = isset($_POST['formation']) ? trim(strip_tags($_POST['formation'])) : "";
    
    // Déterminer la page de retour
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'contact.php';
    $returnPage = (strpos($referer, 'formations.php') !== false) ? 'formations.php' : 'contact.php';

    // Vérification des champs requis
    if (empty($name) || empty($email) || empty($message)) {
        // Redirige en cas d'erreur
        header("Location: $returnPage?error=missing");
        exit;
    }

    // Vérification de la validité de l'email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: $returnPage?error=invalid_email");
        exit;
    }

    // Préparation du mail
    $to = "udsp63@orange.fr";  // Remplacez par votre adresse email
    
    // Adapter le sujet selon le formulaire
    if (!empty($formation)) {
        $email_subject = "Demande d'information formation: $formation";
    } else {
        $email_subject = "Nouveau message du formulaire de contact: $subject";
    }
    
    // Corps du message adapté selon le formulaire
    $email_body = "Vous avez reçu un nouveau message depuis votre site.\n\n";
    $email_body .= "Nom: $name\n";
    
    if (!empty($prenom)) {
        $email_body .= "Prénom: $prenom\n";
    }
    
    $email_body .= "Email: $email\n";
    
    if (!empty($telephone)) {
        $email_body .= "Téléphone: $telephone\n";
    }
    
    if (!empty($formation)) {
        $email_body .= "Formation: $formation\n";
    } else if (!empty($subject)) {
        $email_body .= "Sujet: $subject\n";
    }
    
    $email_body .= "\nMessage:\n$message\n";
    
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n";

    // Envoi du mail
    if (mail($to, $email_subject, $email_body, $headers)) {
        header("Location: $returnPage?success=1");
        exit;
    } else {
        header("Location: $returnPage?error=send");
        exit;
    }
} else {
    // Si l'accès n'est pas par POST, redirige vers la page contact
    header("Location: contact.php");
    exit;
}
?>