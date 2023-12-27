<?php
$nombre = (int) $_POST["nombre"];
$nombre1=3;
$nombre2=5;
echo "<h1> ici on teste si un nombre est a la fois un multiple de 3 et 5 </h1> <br/>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 2 </title>
</head>
<body>
<form method="POST">
    <label for="">Entrer un nombre :</label>
    <input type="text" name="nombre" >
    <button type="submit">Envoyer</button>
   </form>
   <?php
   if(($nombre % $nombre1==0) && ($nombre % $nombre2==0)){
    echo "$nombre est un multiple de 3 et 5";
}else{
    echo "$nombre n est pas un multiple de 3 et 5";
    }
?>
    
</body>
</html>