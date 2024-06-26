<?php

$name = $_GET['name'];
$age = $_GET['age'];
$email = $_GET['email'];

if (strlen($name) > 3 && strpos($email, '@') !== false && strpos($email, '.') !== false && is_numeric($age)) {
    echo "Accesso riuscito";
} else {
    echo "Accesso negato";
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
        <form action="" method="GET">
            <label for="name">Inserisci nome:</label>
            <input type="text" id="name" name="name"><br>

            <label for="age">Inserisci anni:</label>
            <input type="text" id="age" name="age"><br>

            <label for="email">Inserisci Email:</label>
            <input type="text" id="email" name="email"><br>

            <button>send</button>
        </form>
    </main>
</body>

</html>