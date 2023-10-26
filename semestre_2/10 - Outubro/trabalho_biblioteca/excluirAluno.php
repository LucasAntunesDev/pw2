<?php
use Controller\AlunoController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\AlunoController();
$controller->remove();