<?php
//index.php
//composer require mpdf/mpdf 8.* --ignore-platform-reqs

require_once("vendor/autoload.php");

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML("<h1>Sport Club Internacional</h1>");
$mpdf->WriteHTML("<img src='https://live.staticflickr.com/65535/53103833904_6fa81122f2_b.jpg'/>" );

$mpdf->Output();