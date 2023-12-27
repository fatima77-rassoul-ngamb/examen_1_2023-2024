<?php

function transformeTableau(&$tableau)
{
    foreach ($tableau as &$mot) {
        $mot = ucfirst(strtolower($mot));
    }
}

$mesMots = []; // Initialise $mesMots

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si le champ "mot" a été soumis
    if (isset($_POST["mot"])) {
        // Récupère la valeur du champ "mot"
        $input = trim($_POST["mot"]);

        // Vérifie si tous les mots sont des chaînes de caractères alphabétiques
        $mots = explode(' ', $input);
        $tousAlphabetiques = true;

        foreach ($mots as $mot) {
            if (!ctype_alpha($mot)) {
                $tousAlphabetiques = false;
                break;
            }
        }

        if ($tousAlphabetiques) {
            // Convertit les mots en tableau
            $mesMots = $mots;

            // Appelle la fonction pour transformer les mots
            transformeTableau($mesMots);
        } else {
            echo "Veuillez entrer uniquement des chaînes de caractères.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 15</title>
</head>
<body>
    <form method="POST">
        <label for="mot">Entrez des mots séparés par des espaces :</label>
        <input type="text" name="mot" id="mot">
        <button type="submit">Executer</button>
    </form>
    <?php
    // Affichage du résultat
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["mot"]) && $tousAlphabetiques) {
        echo "Résultat : " . implode(' ', $mesMots);
    }
    ?>
</body>
</html>