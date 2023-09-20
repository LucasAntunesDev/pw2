<?php
//index.php
require_once('Personagem.php');
require_once('Filme.php');

$personagem1 = new Personagem('Oppenheimer', 'Cillian Murphy', true);
$personagem2 = new Personagem('Levi Strauss', 'Robert Downey Jr.', false);
//Duração em minutos
$oppenhimer = new Filme('Oppenheimer', 180, [$personagem1]);
$oppenhimer->addPersonagem($personagem2);

$personagem3 = new Personagem('Frodo', 'Elijah Wood', true);
$personagem4 = new Personagem('Aragorn', 'Viggo Mortensen', false);
$personagem5 = new Personagem('Gandalf', 'Ian McKellen', false);
$oRetornoDoRei = new Filme('O Senhor dos Anéis: O Retorno do Rei', 251, [$personagem3]);
$oRetornoDoRei->addPersonagem($personagem4);
$oRetornoDoRei->addPersonagem($personagem5);

echo '<h2>Personagens de O Senhor dos Anéis: O Retorno do Rei</h2>';
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
                echo $personagem->isProtagonista() ?  'Sim': 'Não';
            echo '</td>';

        echo '</tr>';
    }
    echo '</tbody>';
echo '</table>';

echo '<h2>Protagonistas de Oppenheimer</h2>';
foreach($oppenhimer->obterProtagonistas() as $protagonista){
    echo "- " .$protagonista->getNome();
}