<?php
date_default_timezone_set('America/Sao_Paulo');
$hora = date("H");

$dia = $hora > "06" && $hora <= "12";
$tarde = $hora > "12" && $hora <= "18";

switch ($hora) {
    case $dia:
        echo '<p style="color:#10b981;"> Bom dia </p>';
        break;
    case $tarde:
        echo '<p style="color:crimson;"> Boa tarde </p>';
        break;
    default:
        echo '<p style="color:#38bdf8;"> Boa noite </p>';
}