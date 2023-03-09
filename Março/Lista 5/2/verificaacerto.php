<?php
$nome = $_POST["nome"];
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$acertos = 0;

echo "<h1>$nome<h1>";
$q1 = "0" ? $acertos++ : ''; 
$q2 = "0" ? '': $acertos++; 
echo $acertos;
