<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parciais</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="icon"="10px" href="https://www.tse.jus.br/++theme++justica_eleitoral/imagens/favicon.ico">
</head>

<body>

    <div id="cabecalho"></div>

    <?php
    session_start();

    //Se o usuário estiver logado, mostra o seu nome
    if (isset($_SESSION['nome'])) {
        $nome = $_SESSION['nome'];
        echo "<h1>$nome, essas são as parciais</h1>";
    } else {
        echo '<h1>Parciais</h1>';
    }

    ?>

    <main>
        <ul>
            <li>
                <span>John Lennon 48%</span>
                <div class="porcentagem ">
                    <div id="porcentagem-1"></div>
                </div>
            </li>
            <li>
                <span>Paul McCartney 44%</span>
                <div class="porcentagem ">
                    <div id="porcentagem-2"></div>
                </div>
            </li>
            <li>
                <span>George Harrinson 6%</span>
                <div class="porcentagem ">
                    <div id="porcentagem-3"></div>
                </div>
            </li>
            <li>
                <span>Ringo Starr 2%</span>
                <div class="porcentagem ">
                    <div id="porcentagem-4"></div>
                </div>
            </li>
        </ul>
    </main>


    <script src="js/jquery.js"></script>
    <script>
        $("#cabecalho").load("cabecalho.html");
    </script>
    <script src="js/candidatos.js"></script>
    <!-- JS para mostar as parciais de forma dinâmica -->
    <script src="js/progresso.js"></script>
</body>

</html>