<!DOCTYPE html>
<html lang="en">
<body>
    
<?php 

function schrijfKleur($kleur) {

    echo "<div style=\"color:".$kleur."; \">Deze tekst heeft de kleur $kleur</div>";
}

schrijfKleur("#FF0000");
schrijfKleur("green");
schrijfKleur("#0000FF");
schrijfKleur("yellow");

?>

</body>
</html>