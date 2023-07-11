<?php
$num = $_POST['num'];

echo "<h1>Tabuada do $num</h1>";

for($i =1; $i<=10; $i++) {
    $multiplicacao = $num * $i;
    echo "$num * $i = $multiplicacao <br>";
}