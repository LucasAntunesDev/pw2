<?php
//index.php
//composer require mpdf/mpdf 8.* --ignore-platform-reqs

require_once("vendor/autoload.php");

$gerador = new App\GeradorDePdf();

$gerador->adiocionarConteudo('<h1>Sport Club Internacional</h1>');
$gerador->adiocionarConteudo('<p>Agora com classes própias. Esse é o padrão facade</p>');
$gerador->adiocionarConteudo("<img src='https://live.staticflickr.com/65535/53103833904_6fa81122f2_b.jpg'/>" );

$mpdf = new \Mpdf\Mpdf();

$gerador->gerar();