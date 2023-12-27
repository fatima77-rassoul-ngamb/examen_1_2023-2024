<?php
$nombre= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer la valeur du nombre depuis le formulaire
    $nombre = $_POST["nombre"];
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> exercice 6</title>
    </head>
    <body>
        <p> <h3> calcul de diviseurs d'un nombre</h3></p>
    <form method="POST">
        <label for="">Entrer un entier :</label>
        <input type="text" name="nombre">
        <button type="submit">calculer</button>
    </form>
    <?php
    // Vérifier si $nombre est un entier positif
    if (is_numeric($nombre) && $nombre > 0) {
        echo "Les diviseurs de $nombre sont : ";

        // Boucle pour trouver les diviseurs
        for ($i = 1; $i <= $nombre; $i++) {
            if ($nombre % $i == 0) {
                echo $i . " ";
            }
        }
    } else {
        echo "Veuillez entrer un entier positif.";
    }
    ?>
    </body>
    </html>

