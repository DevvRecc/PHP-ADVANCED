<!DOCTYPE html>
<html lang="en">
<body>
    
<?php 

function rekenUit($num1, $num2, $num3) {

    $antwoord = $num1 + $num2 + $num3;
        return $antwoord;
}

$antwoord1 = rekenUit(5, 3, 2);
$antwoord2 = rekenUit(300, 200, 500);
$antwoord3 = rekenUit(5000, 3000, 2000);

echo "Het Antwoord van 5 + 3 + 2 = " . $antwoord1 . "<br>";
echo "Het Antwoord van 300 + 200 + 500 = " . $antwoord2 . "<br>";
echo "Het Antwoord van 5000 + 3000 + 2000 = " . $antwoord3 . "<br>";

?>

</body>
</html>