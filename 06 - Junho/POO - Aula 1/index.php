<?php

require_once('Pessoa.php');

// $pessoa1 = new Pessoa();
// $pessoa1->nome = 'Lucas';
// $pessoa1->idade = 17;

$pessoa1 = new Pessoa('Lucas', 17);


echo "Nome: $pessoa1->nome";
echo '<br>';
echo "Idade de $pessoa1->nome: $pessoa1->idade";

// $pessoa1->fazerAniversario();
// echo '<br>';
// echo "$pessoa1->nome fez aniversário: $pessoa1->idade";

// $pessoa2 = new Pessoa();
// $pessoa2->nome = 'Enner Valencia';
// $pessoa2->idade = 33;
// echo '<br>';
// echo "Idade de $pessoa2->nome: $pessoa2->idade";
