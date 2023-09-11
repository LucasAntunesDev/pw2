<?php
//index.php
require_once('Personagem.php');
require_once('Filme.php');

$personagem1 = new Personagem('Oppenheimer', 'Cillian Murphy', true);
$personagem2 = new Personagem('Levi Strauss', 'Robert Downey Jr.', false);
$personagem3 = new Personagem('Frodo', 'Elijah Wood', true);
$personagem4 = new Personagem('Aragorn', 'Viggo Mortensen', false);
$personagem5 = new Personagem('Gandalf', 'Ian McKellen', false);

$oppenhimer = new Filme('Oppenheimer', [$personagem1]);
$oppenhimer->addPersonagem($personagem2);

$oRetornoDoRei = new Filme('O Retorno do Rei', [$personagem3]);
$oRetornoDoRei->addPersonagem($personagem4);
$oRetornoDoRei->addPersonagem($personagem5);

echo '<table border="1">';
    echo '<thead>';
        echo '<tr>';
            echo '<th>Nome</th>';
            echo '<th>Ator</th>';
            echo '<th>Protagonista?</th>';
        echo '</tr>';
    echo '</thead>';

    echo '<tbody>';
    foreach($oRetornoDoRei->getPersonagens() as $personagem){
        echo '<tr>';
            echo '<td>';
                echo $personagem->getNome();
            echo '</td>';

            echo '<td>';
                echo $personagem->getAtor();
            echo '</td>';
            
            echo '<td>';
                // echo $personagem->isProtagonista() ? 'Sim'_: 'Nao';
                echo $personagem->isProtagonista() ?  'Sim': 'Nao';
            echo '</td>';

        echo '</tr>';
    }
    echo '</tbody';
echo '</table>';

echo '<h2>Protagonistas de Oppenheimer<h2>';
foreach($oppenhimer->obterProtagonistas() as $protagonista){
    echo "- " .$protagonista->getNome();
}