<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifiez quelle action a été sélectionnée
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        // Redirigez l'utilisateur en fonction de l'action choisie
        switch ($action) {
            case 'Vendre':
                header('Location: vendre.php');
                exit;
            case 'Acheter':
                header('Location: acheter.php');
                exit;
            case 'Louer':
                header('Location: louer.php');
                exit;
            default:
                // Gestion d'une action inconnue (éventuellement rediriger vers une page d'erreur)
                break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 14</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color:   #e68fd9; 
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1, h2 {
            color: #fff; /* White text */
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        input[type="submit"] {
            padding: 10px;
            margin: 5px;
            font-size: 16px;
            cursor: pointer;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1> Bienvenu! dans notre agence immobiliere </h1>
    <p> <h2>Baytoul Wafaa - La Maison de l'Épanouissement</h2>

Nous sommes une agence, où vos rêves immobiliers prennent vie avec excellence et dévouement. Notre agence s'engage à offrir des services immobiliers exceptionnels, alliant expertise locale et engagement envers votre épanouissement.

<h2>Notre Mission :</h2>

À Baytoul Wafaa, notre mission est de créer des expériences immobilières enrichissantes. Nous nous efforçons de comprendre vos besoins uniques et de vous guider tout au long du processus avec professionnalisme et passion.

<h2>Nos Services :</h2>

Vente et Achat de Biens Immobiliers</br>
Location Résidentielle et Commerciale</br>
etc

</p>
    <h2>Pour plus d'informations, nous vous invitons a choisir une option:</h2>

    <form action="" method="post">
        <input type="submit" name="action" value="Vendre">
        <input type="submit" name="action" value="Acheter">
        <input type="submit" name="action" value="Louer">
    </form>
</body>
</html>