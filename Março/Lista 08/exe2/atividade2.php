<?php
$salario = $_POST['salario'];
if ($salario <= 300) {
    echo "O salário reajustado ficou em: R$".$salario += $salario * 0.5;
} else {
    echo "O salário reajustado ficou em: R$".$salario += $salario * 0.3;
}