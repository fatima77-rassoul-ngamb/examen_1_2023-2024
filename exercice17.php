<?php

function afficherTableauMultidimensionnel($tableau) {
    echo '<table border="1">';
    
    // En-tête du tableau avec les clés des tableaux
    echo '<tr>';
    foreach (array_keys(current($tableau)) as $cle) {
        echo '<th>' . htmlspecialchars($cle) . '</th>';
    }
    echo '</tr>';
    
    // Contenu du tableau
    foreach ($tableau as $ligne) {
        echo '<tr>';
        foreach ($ligne as $valeur) {
            echo '<td>' . htmlspecialchars($valeur) . '</td>';
        }
        echo '</tr>';
    }
    
    echo '</table>';
}

// Exemple d'utilisation
$exempleTableau = array(
    array('Nom' => 'Moussa', 'Âge' => 30, 'Ville' => 'Kolda'),
    array('Nom' => 'Aby', 'Âge' => 25, 'Ville' => 'Dakar'),
    array('Nom' => 'Ousmane', 'Âge' => 35, 'Ville' => 'kaolack'),
    array('Nom' => 'Abdoulaye', 'Âge' => 15, 'Ville' => 'Diourbel'),
    array('Nom' => 'Rokhaya', 'Âge' => 20, 'Ville' => 'Ouest-Foire'),
    array('Nom' => 'Fatou Binetou', 'Âge' => 21, 'Ville' => 'Bargny'),
    array('Nom' => 'Aliou', 'Âge' => 28, 'Ville' => 'Mariste'),


);

afficherTableauMultidimensionnel($exempleTableau);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 17</title>
</head>
<body>
    
</body>
</html>