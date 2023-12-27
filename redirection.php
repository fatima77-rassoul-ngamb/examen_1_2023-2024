<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifiez quelle action a été sélectionnée
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        // Redirigez l'utilisateur en fonction de l'action choisie
        switch ($action) {
            case 'Vendre':
                header('Location: vendre.php');
                exit;
            case 'Acheter':
                header('Location: acheter.php');
                exit;
            case 'Louer':
                header('Location: louer.php');
                exit;
            default:
                // Gestion d'une action inconnue (éventuellement rediriger vers une page d'erreur)
                break;
        }
    }
}

// Si aucune action n'est spécifiée ou si quelque chose ne va pas, redirigez vers une page par défaut
header('Location: exercice14.php');
exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>redirection</title>
</head>
<body>
    
</body>
</html>