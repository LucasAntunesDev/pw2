<?php

require_once('ClientePF.php');
require_once('ClientePJ.php');

$cliente = new ClientePF ('Lucas', 'lucasantunes@gmail.com','0443436453');
echo $cliente->getCpf();

echo '<br>';

echo $cliente->getNome();
echo '<br>';

$empresa = new ClientePJ('XYZ Corp', 'xyz@corp.com', '0456445979473');
echo $empresa->getCnpj();

echo '<br>';
$empresa->setEmail('xyzcorp@gmail.com');
echo $empresa->getEmail();