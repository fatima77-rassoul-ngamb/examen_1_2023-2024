<?php
$personnes = array(
    'Adama' => array('Adama', 'Paris', 25),
    'Maty' => array('Maty', 'Guediawaye', 30),
    'Fatima' => array('Fatima', 'Ouest-Foire', 18),
    'Diarra' => array('Diarra', 'Yeumbeul', 28),
    
    'Alice' => array('Alice', 'Paris', 30),
    'Bob' => array('Bob', 'Lyon', 25),
    'Charlie' => array('Charlie', 'Marseille', 35),
    
);

// avec une boucle foreach
foreach ($personnes as $nom => $infosPersonne) {
    if (is_array($infosPersonne)) {
        if (count($infosPersonne) === 3) {
            // Si le sous-tableau a trois éléments, c'est probablement le format 'nom', 'ville', 'âge'
            echo 'Nom: ' . $infosPersonne[0] . ', Ville: ' . $infosPersonne[1] . ', Âge: ' . $infosPersonne[2] . '<br>';
        } else {
            // Sinon, c'est probablement le format 'nom', 'prénom', 'ville', 'âge'
            echo 'Nom: ' . $infosPersonne[1] . ', Prénom: ' . $infosPersonne[0] . ', Ville: ' . $infosPersonne[2] . ', Âge: ' . $infosPersonne[3] . '<br>';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 10</title>
</head>
<body>
    
</body>
</html>