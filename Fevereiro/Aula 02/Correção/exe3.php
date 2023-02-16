<?php

//Questão 3: Crie um programa que verifique se o time informado é o melhor do Rio Grande do Sul considerando as seguintes opções:Grêmio Inter Esportivo Caxias

$time = "Grêmio";
switch($time) {
    case 'Grêmio':
        echo "Parabéns, você acertou!";
        break;
    case 'Inter':
        echo "Ihhh, errou longe!";
        break;
    case 'Esportivo':
        echo "Não, errou!";
        break;
    case 'Caxias':
        echo "Nem pensar!";
        break;    
}