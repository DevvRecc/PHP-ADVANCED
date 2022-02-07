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
        <div class="contact-form">
            <form>
                <label for="klas">Klas: </label>
                <select id="klas" name='klas'>
                <?php
        	        $klassen = ['8A' , '8B' , '8C' , '8D' , '8E' , '9A' , '9B' , '9C' , '9D' , '9E'];
                        foreach($klassen as $klas ){
                            echo "<option value='$klas'>$klas</option>";
                        }
        	    ?>
                </select>
                <input type="submit" value= "Submit">
            </form>
        </div>



    </body>
</html>