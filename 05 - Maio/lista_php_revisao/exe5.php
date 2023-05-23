<?php 
date_default_timezone_set("America/Sao_Paulo");
$data = date('d');

for ($i=1; $i <= 31; $i++) 
if ($i != $data) echo"<li>$i</li>";

