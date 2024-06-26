<?php

$partite[] = array(
    "squadra_casa" => "Olimpia Milano",
    "squadra_ospite" => "Cantù",
    "punti_casa" => 55,
    "punti_ospite" => 60
);
$partite[] = array(
    "squadra_casa" => "Verona",
    "squadra_ospite" => "Cagliari",
    "punti_casa" => 45,
    "punti_ospite" => 40
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <div>
            <?php foreach ($partite as $partita) {
                echo $partita["squadra_casa"] . " - " . $partita["squadra_ospite"] . " | " . $partita["punti_casa"] . " - " . $partita["punti_ospite"] . "<br>";
            }
            ?>
        </div>
    </main>
</body>

</html>