<?php

$personnes = array(
    'Adama' => array(
        'nom' => 'Barry',
        'prenom' => 'Adama',
        'ville' => 'Paris',
        'age' => 25
    ),
    'Maty' => array(
        'nom' => 'Diop',
        'prenom' => 'Maty',
        'ville' => 'Guediawaye',
        'age' => 30
    ),
    'Fatima' => array(
        'nom' => 'Mbaye',
        'prenom' => 'Fatima',
        'ville' => 'Ouest-Foire',
        'age' => 18
    ),
    'Diarra' => array(
        'nom' => 'Mbaye',
        'prenom' => 'Diarra',
        'ville' => 'Yeumbeul',
        'age' => 28
    ),
);

// Exemple d'accès aux informations
$nomPersonne = 'Fatima';
if (isset($personnes[$nomPersonne])) {
    $infosPersonne = $personnes[$nomPersonne];
    echo "Nom: {$infosPersonne['nom']}<br>";
    echo "Prénom: {$infosPersonne['prenom']}<br>";
    echo "Ville: {$infosPersonne['ville']}<br>";
    echo "Âge: {$infosPersonne['age']} ans<br>";
} else {
    echo "La personne $nomPersonne n'a pas été trouvée dans le tableau.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exerice 9</title>
</head>
<body>
    
</body>
</html>