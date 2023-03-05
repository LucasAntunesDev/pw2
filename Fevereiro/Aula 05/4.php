<!-- Faça um programa que receba o nome de 5 produtos e seus respectivos
preços, calcule e mostre:
a. A quantidade de produtos com preço inferior a R$50,00.
b. O nome dos produtos com preço entre R$50,00 e R$100,00.
c. A média dos preços dos produtos com preço superior a R$100,00. -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array de produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1>Array de produtos</h1>
    <?php
    $produtos = array(
        'Playstation 5' => array(
            'Preço' => '5000'
        ),
        //Só pra agradar o professor :)
        'Camisa do Grêmio' => array(
            'Preço' => '300'
        ),
        'Mouse Logitech M190' => array(
            'Preço' => '60'
        ),
        'Alguma coisa que custo R$20' => array(
            'Preço' => '20'
        ),
        'Alguma coisa que custo R$30' => array(
            'Preço' => '30'
        ),
    );

    $menor_que_50 = 0;
    $maior_que_100 = 0;
    $soma = 0;

    foreach ($produtos as $produto => $preco) {

        foreach ($preco as $p) {
            echo "preço => $p <br>";
            if ($p >= 50 && $p < 101) {
                $entre_50_e_100++;
                echo "$p está entre 50 e 100<br>";
                $nome_entre_50_e_100[$produto] = $produto;
            } else if ($p < 50) {
                $menor_que_50++;
                echo "$p é menor que 50<br>";
            } else {
                $maior_que_100++;
                $soma += $p;
                echo "$p é maior que 100<br>";
            }
        }
    }

    $media = $soma / $maior_que_100;
    $nome_entre_50_e_100 = implode(' , ', $nome_entre_50_e_100);

    echo "<hr>";
    echo "<pre>";
    echo "São <b>$menor_que_50 produtos</b> mais baratos que R$50,00<br>";
    echo "Produtos com preço entre R$50,00 e R$100,00: <b>$nome_entre_50_e_100</b><br>";
    echo "Média dos produtos mais caros que R$100,00: <b>$media</b> <br>";
    echo "</pre>";

    ?>
</body>

</html>