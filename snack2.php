
<?php 
$name = $_GET['name'];
$surname = $_GET['surname'];
$age = $_GET['age'];
$email = $_GET['email'];
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

            <label for="surname">Inserisci cognome:</label>
            <input type="text" id="surname" name="surname"><br>

            <label for="age">Inserisci anni:</label>
            <input type="text" id="age" name="age"><br>

            <label for="email">Inserisci Email:</label>
            <input type="text" id="email" name="email"><br>

            <input type="submit" value="Submit">
        </form>
    </main>
</body>
</html>