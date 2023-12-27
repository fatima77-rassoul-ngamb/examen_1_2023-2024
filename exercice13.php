<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 13</title>
</head>
<body>
    
<?php
// Définir des valeurs par défaut
$prixHT = isset($_POST['prixHT']) ? $_POST['prixHT'] : '';
$tauxTVA = isset($_POST['tauxTVA']) ? $_POST['tauxTVA'] : '';
?>

<form method="post" action="">
    <label for="prixHT">Prix HT :</label>
    <input type="text" name="prixHT" id="prixHT" value="<?php echo $prixHT; ?>" required>
    <br>

    <label for="tauxTVA">Taux de TVA :</label>
    <input type="text" name="tauxTVA" id="tauxTVA" value="<?php echo $tauxTVA; ?>" required>
    <br>

    <input type="submit" value="Calculer">
</form>

<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Valider et récupérer les données du formulaire
    $prixHT = floatval($_POST['prixHT']);
    $tauxTVA = floatval($_POST['tauxTVA']);

    // Calculer la TVA et le prix TTC
    $montantTVA = $prixHT * ($tauxTVA / 100);
    $prixTTC = $prixHT + $montantTVA;

    // Afficher les résultats
    echo "<h2>Résultats :</h2>";
    echo "<p>Montant de la TVA : " . number_format($montantTVA, 2) . " F CFA</p>";
    echo "<p>Prix TTC : " . number_format($prixTTC, 2) . " F CFA</p>";
}
?>
</body>
</html>