
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 3</title>
</head>
<body>
<h2>tirage aleatoire</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Contrôle de saisie
    $user_input = $_POST["user_input"];
    if (is_numeric($user_input) && strlen($user_input) === 3) {
        $target_number = intval($user_input);
        
        // Tirages aléatoires
        $attempts = 0;
        while (rand(100, 999) !== $target_number) {
            $attempts++;
        }

        echo "<p>Nombre d'essais nécessaires avec la boucle while : $attempts</p>";

        // Réinitialisation des tentatives
        $attempts = 0;
        for (; rand(100, 999) !== $target_number; $attempts++) {
            // Boucle for vide
        }

        echo "<p>Nombre d'essais nécessaires avec la boucle for : $attempts</p>";
    } else {
        echo "<p>Veuillez entrer un nombre de trois chiffres.</p>";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="user_input">Entrez un nombre de trois chiffres :</label>
    <input type="text" name="user_input" id="user_input" required pattern="\d{3}">
    <button type="submit">Soumettre</button>
</form>

    
</body>
</html>