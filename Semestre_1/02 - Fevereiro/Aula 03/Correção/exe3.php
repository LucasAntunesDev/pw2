<?php

//Crie um programa que tenha uma função que recebe 1 valor por referêcia, se for maior que 10 ele incrementa, se for menor decrementa. Se não for informado, por padrão, ele será igual a 5

function referencia(&$val1 = 5){    
    if($val1>10){
        $val1+=1;
    }else{
        $val1-=1;
    }
}
$m1 = 12;
referencia($m1);
echo "<p>Passei 12 e retornou $m1";

$m2 = 4;
referencia($m2);
echo "<p>Passei 4 e retornou $m2";
