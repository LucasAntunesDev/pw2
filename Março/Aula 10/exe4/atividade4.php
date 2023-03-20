<?php
//atividade4.php
$frase = $_POST['frase'];
$caracter = $_POST['caracter'];

$ocorrencia = substr_count($frase, $caracter);
echo "A letra $caracter aparece <b>$ocorrencia</b> vezes na frase <b>$frase</b>";