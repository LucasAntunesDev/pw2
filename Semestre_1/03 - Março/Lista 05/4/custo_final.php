<head>
    <title>Custo Final</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<?php
$custo_fabrica = $_GET['preco'];
$percentual_distribuidora = $custo_fabrica*(28/100);
$imposto = $custo_fabrica*(45/100);
$custo_final = $custo_fabrica + $percentual_distribuidora + $imposto;

echo "O custo final do veículo foi de <b>R$$custo_final</b>";