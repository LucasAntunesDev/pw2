<?php
//atividade1.php
$numero = $_POST['num'];
if($numero >= 10) echo  'O número é maior que 10' ;
else if($numero == 10 ) echo 'O número é menor que 10';
else echo 'O número é igual a 10';