<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
//Descobre qual número é menor e maior
if ($num1 < $num2) {
    $menor = $num1;
    $maior = $num2;
} else if ($num1 > $num2) {
    $menor = $num2;
    $maior = $num1;
} else {
    $maior = $num1;
    $menor = $num1;
}

/*O multiplicador será o menor número, 
a fim de fazer o loop funcionar no menor número de vezes*/
$multiplicador = $menor;
$multiplicado = $maior;
//Determina se os números são iguais
$num1 != $num2 ? $iguais = false : $iguais = true;

if ($num1 != $num2) for ($i = 1; $i < $multiplicador; $i++) $multiplicado += $maior;
else for ($i = 1; $i < $num2; $i++) $num1 += $num2;
    
if ($iguais) {
    echo "Os números são $num2 e $num2<br>";
    echo "O resultado da multiplicação é $num1";
} else {
    echo "Os números são $num1 e $num2<br>";
    echo "O resultado da multiplicação é $multiplicado";
}















// $soma = 0;

// if($num1 <= $num2) 
// while($num1 <= $num2) {
//     $soma += $num1;
// }
// else if($num1 >= $num2) while($num1 >= $num2) $soma += $num2;
// if($num1 <= $num2) {
    // for($soma = $num1; $soma <= $num1; $soma ++){
    //     echo "$soma<br>";
    // }
    // for($i = 3; $i <= 5; 5+5){
    //     echo "$i<br>";
    // }
// }

// echo "final: $soma";
