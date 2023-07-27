<?php

include_once('Gerente.php');
include_once('Estagiario.php');

$gerente = new Gerente('Fulano');
var_dump($gerente->login());