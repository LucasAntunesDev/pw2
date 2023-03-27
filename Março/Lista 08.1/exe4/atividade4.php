<?php
$num = $_POST['mes'];
$nome = $_POST['nome_mes'];

$meses = array(
    1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril', 5 => 'Maio', 6 => 'Junho',
    7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
);
// echo $meses[$num];
echo $num > 0 && $num<=12 ? "O mês é $meses[$num]" : "Não existe um mês com o número $num";
