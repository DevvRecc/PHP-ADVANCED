<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoer</title>
</head>

<body>
    <form name="invoerformulier" action="mijngegevens.php" method="post"> 
        <p>Voornaam: <input name="voornaam"></p>
        <p>Achternaam: <input name="achternaam"></p>
        <p>Leeftijd: <input name="leeftijd"></p>
        <p>Geslacht: <label for="sex0">Man</label><input type="radio" id="sex0" value="Man" name="geslacht"><label for="sex1">Vrouw</label><input type="radio" id="sex1" value="Vrouw" name="geslacht"></p>             
        <select id="kleur" name="kleur">
            <?php 
            $lievelingskleuren = ['blue' , 'red' , 'yellow' , 'green'];
            foreach($lievelingskleuren as $lievelingskleur){
                 echo "<option value= '$lievelingskleur' selected>$lievelingskleur</option>";
            }
            ?>
        </select>
        <input type="submit" name="submit" value="Verstuur">
    </form>    
</body>

</html>