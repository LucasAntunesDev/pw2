<?php
$array;
for($i = 0; $i < 30; $i++){
    $array[$i] = rand(1,100);
    echo $array[$i] % 2 == 0 ? 
    "- O número <b>$array[$i]</b> é <b>par</b> <br>" :
    "- O número <b>$array[$i]</b> é <b>ímpar</b> <br>";
}
echo "<pre>";
print_r($array);
echo "</pre>";