<?php
$a = $_GET['a'] ?? 0;
$b = $_GET['b'] ?? 0;
$c = $_GET['c'] ?? 0;

if (
    $a <= 0 ||
    $b <= 0 ||
    $c <= 0
) {
    echo "Você não digitou um valor válido!";
}
else if ( $a + $b <= $c &&
        $b + $c <= $a &&
        $a + $c <= $b ){
    echo 'Não é possível a existência de um triângulo com essas medidas!';
}else if (
        $a === $b &&
        $b === $c &&
        $a === $c
    ) {
        echo 'Triângulo equilátero';
        echo "<br><img src='https://static.mundoeducacao.uol.com.br/mundoeducacao/2022/11/ilustracao-de-um-triangulo-equilatero-abc-cuja-area-esta-destacada-em-amarelo.jpg'/>";
    } else if (
        $a !== $b  ||
        $b !== $c  ||
        $a !== $c
    ) {
        echo 'Triângulo escaleno';
        echo "<br><img src='https://static.todamateria.com.br/upload/tr/ia/trianguloescaleno.jpg'/>";
    } else {
        echo 'Triângulo isósceles';
        echo "<br><img src='https://static.todamateria.com.br/upload/tr/ia/trianguloisosceles2.jpg?auto_optimize=low'/>";
    }
