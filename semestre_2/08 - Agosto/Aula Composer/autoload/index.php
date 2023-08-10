<?php
//index.php

require_once("vendor/autoload.php");

$socio = new App\Socio("Eduardo");
$socio->trabalhar();
$socio->obterLucros();

$funcionario = new App\Funcionario("Fulano");
$funcionario->trabalhar();

$empresa = new App\Empresa("ECorp");
$empresa->obterLucros();