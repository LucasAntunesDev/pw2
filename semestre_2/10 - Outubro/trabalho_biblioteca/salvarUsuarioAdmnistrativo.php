<?php
use Controller\UsuarioAdmnistrativoController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\UsuarioAdmnistrativoController();
$controller->save();