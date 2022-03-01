<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gegevens Ophalen</title>
</head>
<body>

<?php 

echo "<body style='background-color:".$_POST['kleurGoal']."'>";

?>

<?php

function maakRij($test, $KL){
    echo "<tr>";
    echo "<td style='border: ".$_POST['border-dikte']."px solid; color:".$_POST['color']."; padding:".$_POST['padding']."px;'>$test</td>";
    echo "<td style='border: ".$_POST['border-dikte']."px solid; color:".$_POST['color']."; padding:".$_POST['padding']."px;'>$KL</td>";
    echo "</tr>";
}

$informatie = [
    'Naam'      => $_POST['name'],
    'Achternaam'      => $_POST['achternaam'],
    'Leeftijd'      => $_POST['leeftijd'],
    'Plaats'      => $_POST['plaats'],       
    'Hobby'      => $_POST['hobby'],
];

echo "<table style='border:  ".$_POST['border-dikte']."px solid' width='300' cellspacing='0'>";

foreach( $informatie as $key => $rec ){
     maakRij($key, $rec);
}

echo "</table>"

?>

</body>
</html>