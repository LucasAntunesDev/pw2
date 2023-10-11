<?php
//excluirDisciplina.php

use Controller\UsuarioControlller;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\UsuarioController();
$controller->remove();
