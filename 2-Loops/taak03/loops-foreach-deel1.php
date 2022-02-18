<!DOCTYPE html>
<html lang="en">
<body>

<?php 
    echo "<ul>";
    $dagen = array("Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag");
    foreach($dagen as $day)
    echo "<li>$day</li>";
    echo "</ul>";
?>
    
</body>
</html>