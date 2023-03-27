<?php
//atividade2.php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];

$soma = $nota1 + $nota2 + $nota3 + $nota4;
$media = round($soma / 4, 2);

echo $media >= 7.0 ? "Parabéns! Você foi aprovado =D! Sua média é <b>$media<b>" : "Você foi reprovado :( Sua média é <b>$media<b>";

echo "<br><a href='index.html'>Voltar para a página inicial</a>";
