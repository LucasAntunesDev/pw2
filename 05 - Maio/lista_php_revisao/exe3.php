<?php
function celcius ($f) {
    return round(($f-32)/1.8, 2);
}

echo "90º F em Celsius são <b>". celcius(90)."</b>°C <br>";

echo "77º F em Celsius são <b>". celcius(77)."</b>°C <br>";

echo "77º F em Celsius são <b>". celcius(52)."</b>°C <br>";

echo "12º F em Celsius são <b>". celcius(12)."</b>°C <br>";