<?php
$frutas = array("Maçã","Amora","Uva");
$frutas[] = "Abacaxi";
$frutas[] = "Melão";
foreach($frutas as $fruta){
    echo$fruta." ";
}
//Será exibido "Maçã Amora Uva Abacaxi Melão"