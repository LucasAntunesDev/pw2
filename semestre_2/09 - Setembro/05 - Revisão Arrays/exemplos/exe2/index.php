<?php
//index.php

$primos = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];
#ou $primos = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29);
print_r($primos);
echo '<br>';

echo $primos[0];
echo '<br>';

foreach($primos as $primo){
    echo $primo . '<br>';
}

echo '<br>';
foreach($primos as $primo){
    if($primo >= 10 and $primo <=20)
    echo $primo . '<br>';
}