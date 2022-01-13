<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Welke klas zit je nou?</title>
</head>
<body>

<form class= "form" method="GET" action="functie.php">
    <label>Klassen Formulier</label> <br>
    <label>Ik zit in klas:</label> 
<select id="school" name="school">

    <?php

$groep = "8A";
$klassen = ['8A' , '8B' , '8C' , '8D' , '8E' , '9A' , '9B' , '9C' , '9D' , '9E'];
foreach($klassen as $klas){
    if($klas == $Klas){
        echo "<option value='$klas' selected>$klassen[0]</option>";
    }
    else{
        echo "<option value='$klas'>$klassen[0]</option>";
    }
}

    ?>

</select> <br>
<button class= "btn">Verzend</button>
</form>

</body>
</html>