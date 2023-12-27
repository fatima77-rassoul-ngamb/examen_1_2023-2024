<?php
echo '<style>';
echo 'table, th, td { border: 1px solid black; border-collapse: collapse; }';
echo 'th, td { padding: 10px; }';
echo '</style>';

echo '<table>';
echo '<th colspan="2">BIENVENUE SUR LA CORRECTION DE LA SERIE D\'EXERCICE DE PHP</th>';

$exercices = 18;

for ($i = 1; $i <= $exercices; $i++) {
    if ($i % 2 == 1){
    echo '<tr>';
    }
    echo '<td>';
    echo '<a href="exercice' . $i . '.php">exercice' . $i .'</a><br/>';
    echo '</td>';
    if($i % 2 == 0){
        echo '</tr>';
    }
}
if($exercices % 2 == 1){
    echo'
    </tr>';
}
    
    
    

echo '</table>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices et Corrections</title>
</head>
<body>


</body>
</html>