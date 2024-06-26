<?php
// dichiaro valori di min e max
$min = 0;
$max = 100;
// creo array vuoto per contenere i 15 numeri generati
$numbersArray = [];

// ciclo for per iterare 15 volte 
for ($i = 0; $i < 15; $i++) {
    $casualNumber = rand($min, $max);
    if ($casualNumber !== 15) {
        array_push($numbersArray, $casualNumber);
    }
}
var_dump($numbersArray);

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

        </div>
    </main>
</body>

</html>