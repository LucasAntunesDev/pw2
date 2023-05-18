<?php
$num = rand(1, 15);
$triplo = $num * 3;

for($i = $num; $i <= $triplo; $i++){
    echo "$i<br>"; 
    if($i % 7 === 0){
        break;
    }
}