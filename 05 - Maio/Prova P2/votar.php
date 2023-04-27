<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votar candidatos</title>
    <link rel="stylesheet" href="urna.css">
    <link rel="icon"="10px" href="https://www.tse.jus.br/++theme++justica_eleitoral/imagens/favicon.ico">
</head>

<body>

    <?php
    include('header.php');
    ?>

    <div id="candidatos">
        <div class="infoCandidato">
            D'alessandro: 10
            <img src="Dale.png" alt="">
        </div>
        <div class="infoCandidato">
            Fernandão: 06
            <img src="Fernandao.png" alt="">
        </div>
        <div class="infoCandidato">
            Falcão: 79
            <img src="Falcao.png" alt="">
        </div>
    </div>
    <div id="container">
        <div id="esquerda">
            <div id="fim">
                <p>FIM</p>
            </div>
            <div id="infosCandidato">
                <div id="numCandidato">
                    <h5>Número:</h5>
                    <div id="digitos">
                        <form action="none">
                            <input size="1" id="num1" value="" maxlength="1" type="text" readonly="readonly" />
                            <input size="1" id="num2" value="" maxlength="1" type="text" readonly="readonly" />
                        </form>
                    </div>
                    <div id="infos2">
                        <h5>Nome:</h5>
                        <div id="nomeCandidato"></div>
                        <h5>Partido:</h5>
                        <div id="partido"></div>
                    </div>
                </div>

            </div>
            <div id="imgCandidato">
                <img id="foto" height="180px" src="" alt="" srcset="">
            </div>

        </div>
        <div id="direita">
            <div id="jusEleitoral">
                <img id="tseBrasao" src="TSE BW.svg" alt="">
                JUSTIÇA<br>ELEITORAL
            </div>
            <div class="tabela">
                <div style="justify-content: center;" class="tr">
                    <button id="botao1" onclick="inserir(1)" class="botao" type="button">1</button>
                    <button id="botao2" onclick="inserir(2)" class="botao" type="button">2</button>
                    <button id="botao3" onclick="inserir(3)" class="botao" type="button">3</button>
                </div>
                <div class="tr">
                    <button onclick="inserir(4)" class="botao" type="button">4</button>
                    <button onclick="inserir(5)" class="botao" type="button">5</button>
                    <button onclick="inserir(6)" class="botao" type="button">6</button>
                </div>
                <div class="tr">
                    <button onclick="inserir(7)" class="botao" type="button">7</button>
                    <button onclick="inserir(8)" class="botao" type="button">8</button>
                    <button onclick="inserir(9)" class="botao" type="button">9</button>
                </div>
                <div class="tr zero">
                    <button onclick="inserir(0)" class="botao" type="button">0</button>
                </div>
            </div>
            <!--Tabela<!-->
            <div class="tr" id="branco-corrige-confirma">
                <button id="branco" onclick="votoBranco()" type="button">BRANCO</button>
                <button onclick="corrige()" id="corrige" type="button">CORRIGE</button>
                <button id="confirma" onclick="votar()" type="button">CONFIRMA</button>
            </div>
        </div>
        <!--Direita<!-->

    </div>

</body>

<!-- <script src="script.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="script.js"></script>

</html>