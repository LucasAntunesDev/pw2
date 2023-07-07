<?php

require_once('Professor.php');
require_once('Aluno.php');

$prof = new Professor('Elvis', 'Geografia');
echo $prof->getNome();

echo "<br></br>";

$aluno1 = new Aluno('Lucas', $prof);
echo $aluno1->getNome();
echo "<br>";
$professorDoAluno1 = $aluno1->getProfessor();
// echo $aluno1->getProfessor()->getNome();
echo $professorDoAluno1->getNome();