<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Números Primos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
        <h1>Números primos</h1>
    <?php

    // Faça um programa que leia um vetor com n posições para números
    // inteiros. Crie, a seguir, um vetor resultante que contenha todos os números primos do
    // vetor digitado. Mostre os valores do vetor resultante.

    $numero = 5;

    for ($i = 0; $i < $numero; $i++) {
        $vetor[$i] = rand(1, 100);
    }

    foreach ($vetor as $chave => $valor) {
        $divisores = 0;
        echo "<p>Lendo o número $valor</p>";
        for ($num = $valor; $num >= 1; $num--) {
            $valor % $num == 0 ? $divisores++ : '';

            if ($divisores > 2) {
                echo "<p>O número $valor <b>não</b> é primo;";
                $existe_primo = false;
                
                break;
            }
        }
        
        $divisores == 2 ? $primo[] = $valor : '';
        $divisores == 2 ? $existe_primo = true : $existe_primo = false;
    }
    echo "<hr>";
    if ($existe_primo == true) {
        echo "<p>Os números primos são:</p>";

        foreach ($primo as $chave => $valor) {
            echo $valor != null ? "$valor - " : "Não há números primos";
        }
    } else {
        echo "Não há números primos";
    }
    ?>
</body>

</html>