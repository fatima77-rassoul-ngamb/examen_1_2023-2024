<?php
function pgcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function ppcm($a, $b) {
    return ($a * $b) / pgcd($a, $b);
}

$resultat = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entier1 = isset($_POST["entier1"]) ? (int)$_POST["entier1"] : 0;
    $entier2 = isset($_POST["entier2"]) ? (int)$_POST["entier2"] : 0;

    if ($entier1 > 0 && $entier2 > 0) {
        $resultat = ppcm($entier1, $entier2);
    } else {
        $resultat = 'Veuillez saisir des entiers positifs non nuls.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 4</title>
</head>
<body>
    <h2>Calcul du PPCM</h2>

    <form method="POST">
        <label for="entier1">Entrer un entier positif non nul :</label>
        <input type="number" name="entier1" required min="1"><br/>

        <label for="entier2">Entrer un deuxième entier positif non nul :</label>
        <input type="number" name="entier2" required min="1"><br/>

        <button type="submit">Calculer PPCM</button>
   </form>

   <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<p>Résultat : $resultat</p>";
    }
   ?>
</body>
</html>