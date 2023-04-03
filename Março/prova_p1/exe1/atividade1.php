<?php
$num = $_POST['num'];
if ($num > 0) echo "O número $num é positivo!";
else if ($num < 0) echo "O número $num é negativo!";
else echo "O número $num é igual a zero!";
