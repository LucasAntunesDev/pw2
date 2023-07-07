<?php
$quantidade["Banana"] = 10;
$quantidade["Amora"] = 2;
$quantidade["Melancia"] = 7;
foreach($quantidade as $f => $q){
    echo $f." ->".$q."<br>";
}
//Será exibido:
//Banana ->10
//Amora ->2
//Melancia ->7
