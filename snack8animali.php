<?php  
require_once __DIR__ . '/animals.php';

$mammiferi = [];
$pesci = [];
$rettili = [];
$altri = [];

foreach ($animali as $animale) {
    if ($animale['Classe'] == 'Pesci') {
        array_push($pesci, $animale );
    } elseif ($animale['Classe'] == 'Mammiferi') {
        array_push($mammiferi, $animale);
    } elseif ($animale['Classe'] == 'Rettili') {
        array_push($rettili, $animale);
    } else {
        array_push($altri, $animale);
    }
}

?>


<div>
    <h1>
        Mammiferi
    </h1>
    <p><?php var_dump($mammiferi); ?></p>
</div>
<div>
    <h1>
        Rettili
    </h1>
    <p><?php var_dump($rettili); ?></p>
</div>
<div>
    <h1>
        Pesci
    </h1>
    <p><?php var_dump($pesci); ?></p>
</div>
<div>
    <h1>
        Altri
    </h1>
    <p><?php var_dump($altri); ?></p>
</div>
