
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 12</title>
</head>
<body>
    <form action="traitement.php" method="post">
        <fieldset>
            <legend><h1>Adresse client</h1></legend>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required><br>

            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required><br>

            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" id="adresse" required><br>

            <label for="ville">Ville :</label>
            <input type="text" name="ville" id="ville" required><br>

            <label for="code_postal">Code Postal :</label>
            <input type="text" name="code_postal" id="code_postal" required><br>
        </fieldset>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>