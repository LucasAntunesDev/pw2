<?php

include_once('Pessoa.php');

$pessoa = new Pessoa('Fulano', 45);

echo "O peso inicial é de: <br:";
echo $pessoa->getPeso();