<?php
use Controller\UsuarioAdmnistrativoControlller;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\UsuarioAdmnistrativoController();
$controller->remove();
