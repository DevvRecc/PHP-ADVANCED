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