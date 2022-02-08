<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Gegevens</title>
</head>
<body>

<?php 
    echo "Mijn Voornaam: " .$_POST["voornaam"] . "</br>";
    echo "Mijn Achternaam: " .$_POST["achternaam"] . "</br>";
    echo "Mijn Klas: " .$_POST["klas"] . "</br>";
    echo "Mijn Leeftijd: " .$_POST["leeftijd"] . "</br>";
    echo "Mijn Adres: " .$_POST["adres"] . "</br>";
    echo "Mijn Plaatsnaam: " .$_POST["plaatsnaam"] . "</br>";
    echo "Mijn Favoriete Muziekband: " .$_POST["muziekband"];
?>

</body>
</html>