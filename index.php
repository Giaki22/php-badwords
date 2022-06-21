<?php

//Stringa con parole da censurare
$string = "Voglio una pizza con prosiutto cotto ed ananas";
$word = $_GET["forbiddenIngredient"];
$napoliString = str_replace($word, "***", $string);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria Napoletana</title>
</head>
<body>
    <div class="og">
        <h1>Cosa ordina signore?</h1>
        <h3> <?= $string ?> </h3>
        <h5>Lunghezza stringa: <?= strlen($string)?></h5>
    </div>
    <div class="napoli">
        <h1>Cosa ordina signore?</h1>
        <h3> <?= $napoliString ?> </h3>
        <h5>Lunghezza stringa: <?= strlen($napoliString)?></h5>
    </div>
</body>
</html>