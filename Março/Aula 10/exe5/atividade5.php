<?php
//atividade5.php
$frase = strtoupper($_POST['frase']);
$caracter = strtoupper($_POST['caracter']);
$ocorrencia = substr_count($frase, $caracter);

$frase = $_POST['frase'];
$caracter = $_POST['caracter'];

echo "<h1>Ocorrência de caracter</h1>";
echo "A letra \"<b>$caracter</b>\" aparece <b>$ocorrencia</b> vezes na frase <b>\"$frase\"</b>";

echo "<br>
    <a href='index.html'>
        <button>
            Voltar para a página inicial
        </button>
    </a>";
