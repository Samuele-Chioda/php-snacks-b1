<?php
// dichiaro valori di min e max
$min = 0;
$max = 100;
// creo array vuoto per contenere i 15 numeri generati
$numbersArray = [];

// ciclo for per iterare 15 volte 
while (count($numbersArray) < 15) {
    $casualNumber = rand($min, $max);
    if ($casualNumber !== 15) {
        array_push($numbersArray, $casualNumber);
    }
}

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
        <?php var_dump($numbersArray); ?>
        </div>
    </main>
</body>

<style>
    div{
        background-color: pink;
    }
</style>

</html>