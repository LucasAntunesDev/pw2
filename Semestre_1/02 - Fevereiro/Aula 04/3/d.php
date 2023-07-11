<?php
$x[0]["nome"] = "Beatriz";
$x[0]["idade"] = 6;
$x[1]["nome"] = "Carlos";
$x[1]["idade"] = 5;
foreach($x as $i => $v){
    foreach($v as $j =>$z){
        echo $i." - ".$z."<br>";
    }
}
//Será exibido:
// 0 - Beatriz
// 0 - 6
// 1 - Carlos
// 1 - 5