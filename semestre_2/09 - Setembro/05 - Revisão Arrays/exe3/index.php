<?php
//index.php

$times = [
    'Inter' => ['Rochet', 'Enner Valencia', 'Alan Patrick'],
    'Flamengo' => ['Pedro', 'Gabigol', 'Everton Ribeiro'],
    'Palmeiras' => ['Veiga', 'Rony Rústico', 'Dudu'],
];

echo '<pre>';
print_r($times);
echo '</pre>';

//Não dava pra criar array com esse tipo de chave (string)
//com array_push, pois ele só funciona com int
$times['Boca Juniors'] = ['Cavani', 'Benedetto'];
echo '<pre>';
print_r($times);
echo '</pre>';

echo '<br>';
foreach ($times as $time) {
    foreach ($time as $jogador) {
        echo '- ' . $jogador . '<br>';
    }
}

// //Não pode dar echo em $jogadores, porque ele é um array
// foreach ($times as $time => $jogadores) {
//     foreach ($jogadores as $jogador) {
//         echo '- ' . $jogador . '<br>';
//     }
// }

foreach ($times as $time => $jogadores) {
    echo '<h1>' . $time . '</h1>';
    echo '<ul>';

    foreach ($jogadores as $jogador) {
        echo '<li>' . $jogador . '</li>';
    }

    echo '</ul>';
}
