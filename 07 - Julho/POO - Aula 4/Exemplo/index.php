<?php

require_once('ClientePF.php');
require_once('ClientePJ.php');

$pf = new ClientePF('Lucas','lucas@gmail.com', '5465465464');
$pf->enviarEmail();