<?php
//salvarDisiciplina.php

use Controller\UsuarioController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\UsuarioController();
$controller->save();