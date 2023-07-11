<?php
$num = $_POST['num'];

for ($i =1; $i<=10; $i++){
    $multiplicacao = $num * $i;
    echo "$i) $num * $i = $multiplicacao
    <br>";
}