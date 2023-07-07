<?php
$str1 = $_POST['str1'];
$str2 = $_POST['str2'];
$resultado = strcmp($str1, $str2);
echo $resultado == 0 ? "IGUAL" : "DIFERENTE";