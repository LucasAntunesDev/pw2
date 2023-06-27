<?php

require_once('Pessoa.php');

$pessoa1 = new Pessoa('Lucas', 17);
//O construct não impede de alterarmos os valores posteriormente. EX:
// $pessoa1->setNome() = 'Lucas Antunes';


echo $pessoa1->getNome();
echo '<br>';
echo $pessoa1->getIdade();

$pessoa1->fazerAniversario();
echo '<br>';
echo $pessoa1->getIdade();

$pessoa2 = new Pessoa('Enner Valencia', 33);

echo '<br>';
echo $pessoa2->getIdade();
