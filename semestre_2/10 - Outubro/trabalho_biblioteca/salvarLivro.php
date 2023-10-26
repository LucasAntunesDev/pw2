<?php
use Controller\LivroController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller\LivroController();
$controller->save();