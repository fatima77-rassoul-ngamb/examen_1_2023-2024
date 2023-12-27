<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 7</title>
</head>
<body>

<h2>Vérification Nombre Parfait</h2>

<form method="post" action="">
    <label for="nombre">Entrez un nombre :</label>
    <input type="text" name="nombre" id="nombre" required>
    <button type="submit">Vérifier</button>
</form>

<?php
function estParfait($nombre) {
    $sommeDiviseurs = 0;

    for ($i = 1; $i <= $nombre / 2; $i++) {
        if ($nombre % $i == 0) {
            $sommeDiviseurs += $i;
        }
    }

    return $sommeDiviseurs == $nombre;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer la valeur du formulaire
    $nombre = isset($_POST["nombre"]) ? intval($_POST["nombre"]) : 0;

    // Vérifier si le nombre est parfait
    if (estParfait($nombre)) {
        echo "<p>{$nombre} est un nombre parfait.</p>";
    } else {
        echo "<p>{$nombre} n'est pas un nombre parfait.</p>";
    }
}
?>

</body>
</html>