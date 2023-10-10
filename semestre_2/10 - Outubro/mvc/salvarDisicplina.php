<?php
//salvarDisiciplina.php

use Controller\DisciplinaController;

require('config.php');
require('vendor/autoload.php');

$controller = new Controller|DisciplinaController();
$controller->save;