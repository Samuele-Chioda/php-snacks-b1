<?php
// Importazione del file con l'array degli alunni dal file arrayDaImportare
require __DIR__ . '/arrayDaImportare.php';

// Scorre l'array degli alunni
foreach ($classe as $alunno) {
    $nome = $alunno['Nome'];
    $cognome = $alunno['Cognome'];
    $somma = 0;
    $conteggio = 0;

    // Calcola la somma e il conteggio dei voti
    foreach ($alunno['Voti'] as $votiMateria) {
        foreach ($votiMateria as $voto) {
            $somma += $voto;
            $conteggio++;
        }
    }

    // Calcola la media dei voti
    $media = $somma / $conteggio;

    // Stampa il risultato
    echo "Nome: $nome, Cognome: $cognome, Media dei voti: " . number_format($media) . "<br>";
}
?>
