<?php
use Controller\NotaController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\NotaController();
$controller->remove();