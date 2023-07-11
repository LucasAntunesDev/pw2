<?php

require_once('ClientePF.php');
require_once('ClientePJ.php');

$pf = new ClientePF('Lucas','lucas@gmail.com', '5465465464');
$pf->enviarEmail();

$pj = new ClientePJ('e-Corp', 'ecorp@gmail.com', '0573435720543582');
echo '<br>';
$pj->enviarEmail();