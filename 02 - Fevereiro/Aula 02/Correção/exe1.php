<?php
//1) Crie um programa que verifique a nota do aluno e veja se ele aprovou (>=7) ou reprovou

$nota = random_int(0,10);
if ($nota >=7){
    echo "Parabéns, sua nota foi $nota e você foi APROVADO!";
}else{
    echo "Lamento, sua nota foi $nota e você REPROVOU!";
}