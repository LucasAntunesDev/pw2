<?php

// Questão 4: Crie um programa onde o usuário informa um número de início e outro de fim. Faça um loop informando o número que está sendo executado naquele momento

$valorInicio = 5;
$valorFim = 14;

for($contador=$valorInicio;$contador<=$valorFim; $contador++){     
    echo "<p>O contador no momento é $contador </p>";
}