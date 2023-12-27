<?php
 $rayon= "";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer la valeur du rayon depuis le formulaire
    $rayon = $_POST["rayon"];
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 5</title>
</head>
<body>
<h2>calcul du perimetre, du diametre et de la surface</h2>

<form method="POST">
    <label for="rayon">Entrer le rayon du cercle :</label>
    <input type="text" name="rayon">
    <button type="submit">calculer</button><br/>
</form>
<?php 
    echo  "Le diametre du cercle est: <br/> " . intval($rayon)*2 ;

    echo "Le Perimetre du cercle est: <br/> " . 2* M_PI *intval($rayon) ;
    
    echo "La surface du cercle est: <br/> "  . M_PI *intval($rayon)*intval($rayon) ;
?>
    
   
</body>
</html>