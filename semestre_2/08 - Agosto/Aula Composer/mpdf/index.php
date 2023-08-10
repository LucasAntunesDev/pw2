<?php
//index.php
//composer require mpdf/mpdf 8.* --ignore-platform-reqs

require_once("vendor/autoload.php");

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML("<h1>Sport Club Internacional</h1>");

$mpdf->Output();