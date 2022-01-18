<!DOCTYPE html>
<html lang="en">
<body>
    
<?php 

$student  = array(
    "Voornaam"    => "Jan",
    "Achternaam"  => "Janssen",
    "Klas"        => "9A",
    "Leeftijd"    => 17,
    "Woonplaats"  => "Amstelveen"
  );
foreach($student as $key => $value) {
    echo "Alle Informatie Over Jan: $key | $value <br>";
}

?>

</body>
</html>