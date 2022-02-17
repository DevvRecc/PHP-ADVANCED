<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form name="Forum" method="POST" action="advanced-2.php">

<p>Tekst kleur: 
    <select id="kleur" name="color"></p>
        <?php 
        $kleuren = ['red' , 'blue' , 'green' , 'black' , 'brown'];
        foreach($kleuren as $kleur){
            echo "<option value='$kleur' selected>$kleur</option>";
        }
        ?>
    </select></p>

<p>Achtergrond Kleur: 
    <select id="kleur" name="kleurGoal">
            <?php 
            $lievelingskleuren = ['blue' , 'red' , 'yellow' , 'green'];
            foreach($lievelingskleuren as $lievelingskleur){
                 echo "<option value= '$lievelingskleur' selected>$lievelingskleur</option>";
            }
            ?>
    </select></p>

    <p>Naam: <input name="name"></p>
    <p>Achternaam: <input name="achternaam"></p>
    <p>Leeftijd: <input name="leeftijd"></p>
    <p>Woonplaats: <input name="plaats"></p>
    <p>Hobby: <input name="hobby"></p>
    <p>Tabel-Border Dikte: <input name="border-dikte"></p>
    <p>Padding: <input name="padding"></p>


    <input type="submit" name="submit" value="Verstuur">

</form>

</body>
</html>