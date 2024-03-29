<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votar candidatos</title>
    <link rel="stylesheet" href="urna.css">
    <link rel="stylesheet" href="estilo.css">
    <link rel="icon"="10px" href="https://www.tse.jus.br/++theme++justica_eleitoral/imagens/favicon.ico">
</head>

<body>
    <div id="cabecalho"></div>

    <?php

    session_start();
    $nome = $_SESSION['nome'];

    //Redireciona para a página de cadatro caso
    //este não tenha sido feito
    if (!isset($_SESSION['nome'])) {
        header(('location:cadastrar.html?erro=1'));
    }
    echo "<div id='pergunta-voto'>$nome, em quem você irá votar?</div>";
    ?>

    <main>
        <div id="esquerda">
            <div id="fim">
                <p>FIM</p>
            </div>
            <div id="infos-candidato">
                <div>
                    <h5>Número:</h5>
                    <div id="digitos">
                        <input size="1" id="numero" value="" maxlength="1" type="text" readonly="readonly" />
                    </div>
                    <div id="infos2">
                        <h5>Nome:</h5>
                        <div id="nome-candidato"></div>
                        <h5>Partido:</h5>
                        <div id="partido"></div>
                    </div>
                </div>

            </div>
            <div id="img-candidato">
                <img id="foto">
            </div>

        </div>
        <div id="direita">
            <div id="justica-eleitoral">
                <img id="tse-logo" src="../assets/TSE BW.svg" alt="">
                JUSTIÇA<br>ELEITORAL
            </div>
            <div id="btns-digitos">
                <div class="linha">
                    <button onclick="inserir(1)" class="botao" type="button">1</button>
                    <button onclick="inserir(2)" class="botao" type="button">2</button>
                    <button onclick="inserir(3)" class="botao" type="button">3</button>
                </div>
                <div class="linha">
                    <button onclick="inserir(4)" class="botao" type="button">4</button>
                    <button onclick="inserir(5)" class="botao" type="button">5</button>
                    <button onclick="inserir(6)" class="botao" type="button">6</button>
                </div>
                <div class="linha">
                    <button onclick="inserir(7)" class="botao" type="button">7</button>
                    <button onclick="inserir(8)" class="botao" type="button">8</button>
                    <button onclick="inserir(9)" class="botao" type="button">9</button>
                </div>
                <div class="linha zero">
                    <button onclick="inserir(0)" class="botao" type="button">0</button>
                </div>
            </div>

            <div class="linha" id="btns-div">
                <button onclick="corrige()" id="corrige" type="button">CORRIGE</button>
                <button id="confirma" onclick="votar()" type="button">CONFIRMA</button>
            </div>
        </div>
        <!--Direita<!-->

    </main>

    <script src="js/jquery.js"></script>
    <script>
        $("#cabecalho").load("cabecalho.html");
    </script>
    <script src="js/votar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>