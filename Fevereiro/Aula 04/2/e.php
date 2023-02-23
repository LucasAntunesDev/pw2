<?php
$frutas = array("Maçã","Amora","Uva");
rsort($frutas);
foreach($frutas as $fruta){
    echo $fruta." ";
}
#Será exibido "Uva Maça Amora"