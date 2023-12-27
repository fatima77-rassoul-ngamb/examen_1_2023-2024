<?php

$personnes = array(
    'Adama' => array('prénom' => 'Adama','nom' => 'Barry' ,'ville' => 'Paris', 'âge' => 25),
    'Maty' => array('prénom' => 'Maty', 'nom' => 'Diop','ville' => 'Guediawaye', 'âge' => 30),
    'Fatima' => array('prénom' => 'Fatima', 'nom' => 'Mbaye','ville' => 'Ouest-Foire', 'âge' => 18),
    'Diarra' => array('prénom' => 'Diarra', 'nom' => 'Mbaye','ville' => 'Yeumbeul', 'âge' => 28),
);

// Accéder aux informations d'une personne spécifique
$nomPersonne = 'Fatima';
if (isset($personnes[$nomPersonne])) {
    $infosPersonne = $personnes[$nomPersonne];
    echo "Nom : {$infosPersonne['nom']}, Prénom : {$infosPersonne['prénom']}, Ville : {$infosPersonne['ville']}, Âge : {$infosPersonne['âge']} ans";
} else {
    echo "La personne $nomPersonne n'a pas été trouvée dans le tableau.";
}

?>




<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exerice 8</title>
</head>
<body>

    
</body>
</html>