<?php

require_once('Professor.php');
require_once('Aluno.php');

$prof = new Professor('Elvis', 'Geografia');
echo $prof->getNome();

echo "<br></br>";

$aluno1 = new Aluno('Lucas', $prof);
echo $aluno1->getNome();
echo "<br>";
echo $aluno1->getProfessor()->getNome();