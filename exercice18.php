<?php

// Nombre de lignes du motif
$nombreDeLignes = 20;

// Boucle pour générer le motif
for ($i = 1; $i <= $nombreDeLignes; $i++) {
    // Boucle pour répéter le chiffre $i fois
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }
    // Passer à la ligne après chaque ligne du motif
    echo "<br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 18</title>
</head>
<body>
    
</body>
</html>