<?php

include_once('Socio.php');
include_once('Funcionario.php');
include_once('Empresa.php');

$socio = new Socio('Fulano');
echo $socio->getNome();
echo '<br>';
echo $socio->trabalhar();
echo '<br>';
echo $socio->obterLucros();
echo '<br></br>';

$socio = new Funcionario('Fulano');
echo $socio->getNome();
echo '<br>';
echo $socio->trabalhar();
echo '<br></br>';

$socio = new Empresa('XCorp LTDA');
echo $socio->getRazao();
echo '<br>';
echo $socio->obterLucros();
echo '<br></br>';