<?php

// Questão 2: Crie um programa que verifique o sexo informado é "masculino", "feminino" ou "não informado"

$sexo = "não informado";
if($sexo=="masculino"){
    echo "Você informou MASCULINO";
}elseif($sexo=="feminino"){
    echo "Você informou FEMININO";
}else{
    echo "Você informou NÃO INFORMADO";        
}