<?php
//atividade3.php
$numero1 = $_POST['Numero1'];
$numero2 = $_POST['Numero2'];
$maior_numero = '';
$menor_numero = '';

$numero1 > $numero2 ? $maior_numero = $numero1 : $maior_numero = $numero2;
$numero1 < $numero2 ? $menor_numero = $numero1 : $menor_numero = $numero2;

echo "<h1>Núemros intermediários</h1>";

if ($numero1 != $numero2) {
    echo "<b>Os números intemediários são:</b>";
    for ($i = $menor_numero + 1; $i < $maior_numero; $i++) {
        echo "<p>$i<p>";
    }
} else echo "Os dois números são <b>iguais</b>, logo <b>não há</b> um número intermediário";


echo "<a href='index.html'>
        <button>
            Voltar para a página inicial
        </button>
    </a>";
