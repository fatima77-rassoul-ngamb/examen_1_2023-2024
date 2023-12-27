<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traitement.php</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $adresse = $_POST["adresse"];
        $ville = $_POST["ville"];
        $code_postal = $_POST["code_postal"];

        // Affichage des données dans un tableau XHTML
        echo '<table border="6">';
        echo '<tr><th>Nom</th><th>Prénom</th><th>Adresse</th><th>Ville</th><th>Code Postal</th></tr>';
        echo '<tr>';
        echo "<td>$nom</td>";
        echo "<td>$prenom</td>";
        echo "<td>$adresse</td>";
        echo "<td>$ville</td>";
        echo "<td>$code_postal</td>";
        echo '</tr>';
        echo '</table>';
    } else {
         echo '<p>Aucune donnée soumise.</p>';
         }
?>  
</body>
</html>