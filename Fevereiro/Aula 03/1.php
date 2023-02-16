<?php
// Crie um programa que tenha uma função que recebe 4 notas e retorne a média
// deles
    
function media($v1,$v2,$v3,$v4){
        $soma = $v1+$v2+$v3+$v4;
        $media = $soma / 4;
        return $media;
    }

$nota1 = random_int(0,10);
$nota2 = random_int(0,10);
$nota3 = random_int(0,10);
$nota4 = random_int(0,10);

$md = media($nota1,$nota2,$nota3,$nota4);
echo $md;