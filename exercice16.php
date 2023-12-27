<?php

function sinus($angle, $unite = 'radian') {
    switch (strtolower($unite)) {
        case 'radian':
            $angleEnRadian = $angle;
            break;
        case 'degre':
            $angleEnRadian = deg2rad($angle);
            break;
        case 'grade':
            $angleEnRadian = deg2rad($angle * 9 / 10);
            break;
        default:
            throw new InvalidArgumentException("Unité non reconnue : $unite");
    }

    $sinus = sin($angleEnRadian);

    return $sinus;
}

// Traitement du formulaire
$resultat = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des valeurs soumises par le formulaire
    $angle = isset($_POST['angle']) ? floatval($_POST['angle']) : 0;
    $unite = isset($_POST['unite']) ? $_POST['unite'] : 'radian';

    // Calculer le sinus
    $resultat = sinus($angle, $unite);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du Sinus</title>
</head>
<body>
    <h1>Calcul du Sinus</h1>
    
    <?php if ($resultat !== null): ?>
        <!-- Afficher le résultat si disponible -->
        <h2>Résultat :</h2>
        <p>Le sinus de <?= $angle ?> <?= $unite ?> est : <?= $resultat ?></p>
    <?php endif; ?>
    
    <form action="" method="post">
        <label for="angle">Angle :</label>
        <input type="text" name="angle" id="angle" required>
        
        <label for="unite">Unité :</label>
        <select name="unite" id="unite">
            <option value="radian">Radian</option>
            <option value="degre">Degré</option>
            <option value="grade">Grade</option>
        </select>
        
        <button type="submit">Calculer</button>
    </form>
</body>
</html>