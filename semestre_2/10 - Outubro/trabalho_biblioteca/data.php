<?php
// Define a variável data com a data atual no formato Y-m-d
$data = date('Y-m-d');

// Usa a função strtotime para adicionar uma semana à data e obter o timestamp correspondente
$timestamp = strtotime($data . ' + 1 week');

// Usa a função date para formatar o timestamp em uma string no formato Y-m-d
$data_futura = date('Y-m-d', strtotime($data . ' + 1 week'));

// Imprime a data futura na tela
// echo $data_futura;
echo date('Y-m-d', strtotime(date('Y-m-d') . ' + 1 week'));
?>