<?php
$A = $_POST['A'];
$B = $_POST['B'];
$C = $_POST['C'];
$D = $_POST['D'];

$soma = $A + $C;
$multiplicacao = $B * $D;

if($soma > $multiplicacao) $resultado =  "A+C é maior que B*D";
else if($soma < $multiplicacao) $resultado = "A+C é menor que B*D";
else $resultado = "A+C é igual a B*D";

echo $resultado;