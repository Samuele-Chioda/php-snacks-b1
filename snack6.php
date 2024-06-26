<?php
// array di array
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

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
    <div class="grigio">
            <ul>
                <!-- ciclo foreach che itera teachers di array $db e crea elemento $teacher che viene inserito in li specificandone il valore che voglio -->
                <?php foreach ($db['teachers'] as $teacher) { ?>
                    <li>
                        <?php echo $teacher['name'] . ' ' . $teacher['lastname']; ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="verde">
            <ul>
                <?php foreach ($db['pm'] as $pm) { ?>
                    <li>
                        <?php echo $pm['name'] . ' ' . $pm['lastname']; ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </main>
</body>

</html>

<style>
    .grigio{
        width: 100%;
        height: 200px;
        background-color: grey;
        margin-bottom: 5rem;
    }
    .verde{
        width: 100%;
        height: 200px;
        background-color: green;
    }
    li{
        font-size: 3rem;
        font-weight: bolder;
        text-align: center;
        margin-bottom: 3rem;
    }

</style>