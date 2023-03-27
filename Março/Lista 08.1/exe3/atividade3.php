<?php
$num = $_POST['num'];

if ($num % 10 == 0) {
    echo "O número $num é divisível por 10<br>";
}
if ($num % 5 == 0) {
    echo "O número $num é divisível por 5<br>";
}
if ($num % 2 == 0) {
    echo "O número $num é divisível por 2<br>";
}
