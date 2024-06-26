<?php
// array di array
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ]
];
// itero su array posts e salvo chiave nella variabile $date associandoli il valore $sottoArray
foreach ($posts as $date => $sottoArray) {
    echo 'la data dei sottoArray è:' . $date;
    // itero su array $sottoArray e salvo chiave nella variabile $post poi stampo ogni valore di post specificendolo tra []
    foreach ($sottoArray as $post) {
        echo 'titolo:' . $post['title'];
        echo 'autore:' . $post['author'];
        echo 'testo:' . $post['text'];
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
        <article>

        </article>
    </main>
</body>

</html>