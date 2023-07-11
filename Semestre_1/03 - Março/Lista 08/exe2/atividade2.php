<?php
$salario = $_POST['salario'];
if ($salario <= 300) {
    echo "O salário reajustado ficou em: R$" . number_format(($salario += $salario * 0.5), 2, ",", ".");
} else {
    echo "O salário reajustado ficou em: R$" . number_format(($salario += $salario * 0.3), 2, ",", ".");
}
