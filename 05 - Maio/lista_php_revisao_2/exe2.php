<?php
/*Crie uma função PHP que, dados os valores de a, b e c passados por parâmetro,
irá calcular e exibir na tela o cálculo da fórmula de Bhaskara. Atente para a
validação do valor da raiz (a fórmula pode indicar que não existem raízes reais para
a equação, existe uma raiz ou existem duas raízes). Execute esta função para os
seguintes valores:
A. a = 4, b = 2, c = -6
B. a = 7, b = 3, c = 4*/
function delta ($a, $b, $c){
    return ($b**2) - 4 * $a * $c;
}

function bhaskara ($a,$b,$c){
    if (delta ($a, $b, $c) < 0) {
        return "Não existem raízes reais";
    }
    else if (delta ($a, $b, $c) > 0){
        $x1 = ((-$b) + sqrt(delta($a, $b, $c)))/2;
        $x2 = ((-$b) - sqrt(delta($a, $b, $c)))/2;

        return "X' = $x1;   X'' = $x2";
    }
    else{
        return ((-$b) + sqrt(delta($a, $b, $c)))/2;
    }

}

echo "<h1>Fórmula de Bhaskara</h1>";

echo "<h2><b>1. a = 4, b = 2, c = -6</b></h2>";
echo "<b>Δ: </b>".delta (4,2,-6)."<br>";
echo "<b>√: </b>".bhaskara(4,2,-6)."<br>";

echo "<h2><b>2. a = 7, b = 3, c = 4</b></h2>";
echo "<b>Δ: </b>".delta (7,3,3)."<br>";
echo "<b>√: </b>".bhaskara(7,3,3)."<br>";