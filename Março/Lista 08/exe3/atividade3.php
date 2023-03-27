<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$menor = 0;
//descobre qual número é menor e maior
$num1 < $num2 ? $menor = $num1 && $maior = $num2 : $menor = $num2 && $maior = $num1;
// echo $menor;
// echo $maior;
#O multiplicador será o menor número, 
##a fim de fazer o loop funcionar no menor número de vezes
$multiplicador = $menor;
$multiplicado = $maior;
// while($menor <= 15){
//     $menor += $menor;
// }
echo 'teste';
for($i = 0; $i <= $menor; $i++){
    $maior =+ $maior;
} 
echo "o resutlado é $menor";
















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
