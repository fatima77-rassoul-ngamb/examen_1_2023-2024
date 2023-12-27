<?php
$prenom="";
$personnes1 = array(
    array('Adama', 'Paris', 25),
    array('Maty', 'Guediawaye', 30),
    array('Fatima', 'Ouest-Foire', 18),
    array('Diarra', 'Yeumbeul', 28),
);

$personnes2 = array(
    'Adama' => array(
        'prenom' => 'Adama',
        'ville' => 'Paris',
        'age' => 25
    ),
    'Maty' => array(
        'prenom' => 'Maty',
        'ville' => 'Guediawaye',
        'age' => 30
    ),
    'Fatima' => array(
        'prenom' => 'Fatima',
        'ville' => 'Ouest-Foire',
        'age' => 18
    ),
    'Diarra' => array(
        'prenom' => 'Diarra',
        'ville' => 'Yeumbeul',
        'age' => 28
    ),
);

// Fusionnez les tableaux
$personnes = array_merge($personnes1, $personnes2);

// Utilisez une boucle while avec list
$index = 0;
while ($index < count($personnes)) {
    list($nom, $ville, $age) = $personnes[$index];

    echo 'Prénom: ' . $nom . ', Ville: ' . $ville . ', Âge: ' . $age . '<br>';
    $index++;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 11</title>
</head>
<body>
    
</body>
</html>