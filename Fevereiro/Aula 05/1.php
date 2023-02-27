<?php
// $numero = 15;
// $array[] = random_int(0, 10);
// $array[] = random_int(0, 10);
// // $array[] = random_int(0,10);
// // $array[] = random_int(0,10);
// // $array[] = random_int(0,10);
// // $array[] = random_int(0,10);
// $pares = 0;
// $impares = 0;
// for ($i = 0; $i < sizeof($array); $i++) {

//     if ($array[$i] % 2 == 0) {
//         $pares++;
//     }else{
//         $imapres++;
//     }
// }
// echo "O núemro de ímpares é $impares";


$numero = 10;
for ($i = 0; $i < $numero; $i++) {
    $vetor[$i] = null;
}

$pares = 0;
$impares = 0;

foreach ($vetor as $chave => $valor) {
    $num = rand(1, 10);
    if ($num % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
    $vetor[$chave] = $num;
}
echo "<pre>";
echo "O núemro de pares é $pares<br>";
echo "O núemro de ímpares é $impares";
echo "</pre>";
