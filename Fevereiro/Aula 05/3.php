<!DOCTYPE html>

<!-- Média, Moda e Mediana:
a. Crie um vetor de 15 posições e preencha com valores aleatórios entre 0 e 9
b. Calcule a Média, a Moda e a Mediana desse vetor -->

<html lang="pt-BR">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Média, moda e mediana</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1>Média, moda e mediana</h1>
    <?php

    $numero = 15;

    for ($i = 0; $i < $numero; $i++) {
        $vetor[$i] = rand(0, 9);
    }

    #Mediana
    sort($vetor);
    echo "O array é: ";
    echo "<pre>";
    print_r($vetor);
    echo "</pre>";
    //Conta o tamanho do array
    $tamanho_array = count($vetor);
    //Descobre a posição que é metade do array
    $meio_array = (int)($tamanho_array / 2);
    //Calculo da mediana
    $mediana = $vetor[$meio_array];

    #Média
    $soma = 0;
    foreach ($vetor as $valor) {
        $soma += $valor;
    }
    $media = $soma / count($vetor);

    $moda = 0;
    #Moda
    $ocorrencia = [];
    foreach ($vetor as $valor) {
        // $ocorrencia = [];
        if (!isset($ocorrencia[$valor])) {
            $ocorrencia[$valor] = 0;
        }
        $ocorrencia[$valor]++;
        // echo "<p>Ocorrencia do $valor: $ocorrencia[$valor]</p>";
        $moda = array_keys($ocorrencia, max($ocorrencia));
    }
    $moda = implode(' - ', $moda);

    echo "<hr>
        <h3>Média</h3> 
        <p>
            A média é: <b>$media</b>
        </p>
        <hr>";

    echo "<hr>
        <h3>Moda</h3> 
        <p>
            A(s) moda(s) é/são: <b>$moda</b>
        </p>
        <hr>";

    echo "<hr>
        <h3>Mediana</h3> 
        <p>
            A média é: <b>$mediana</b>
        </p>
        <hr>";

    ?>
</body>

</html>