<?php
use Controller\RetiradaController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\RetiradaController();
$controller->remove();