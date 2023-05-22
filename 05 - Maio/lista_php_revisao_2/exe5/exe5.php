<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

function eh_triangulo($a, $b, $c)
{
    if (
        $a + $b > $c &&
        $b + $c > $a &&
        $a + $c > $b
    )
        return true;
    else return false;
}

if (eh_triangulo($a, $b, $c)) {
    if (
        $a === $b &&
        $b === $c &&
        $a === $c
        // eh_triangulo($a, $b, $c) === true
    ) {
        echo 'Triângulo equilátero';
        echo "<br><img src='https://static.mundoeducacao.uol.com.br/mundoeducacao/2022/11/ilustracao-de-um-triangulo-equilatero-abc-cuja-area-esta-destacada-em-amarelo.jpg'/>";
    } else if (
        $a === $b  ||
        $b === $c  ||
        $a === $c
        // eh_triangulo($a, $b, $c) === true
    ) {
        echo 'Triângulo isósceles';
        echo "<br><img src='https://static.todamateria.com.br/upload/tr/ia/trianguloisosceles2.jpg?auto_optimize=low'/>";
    } else {
        echo 'Triângulo escaleno';
        echo "<br><img src='https://static.todamateria.com.br/upload/tr/ia/trianguloescaleno.jpg'/>";
    }
    
} else {
    echo 'Não é possível a existência de um triângulo com essas medidas!';
}