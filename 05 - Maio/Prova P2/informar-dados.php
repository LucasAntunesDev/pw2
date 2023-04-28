<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="icon"="10px" href="https://www.tse.jus.br/++theme++justica_eleitoral/imagens/favicon.ico">
</head>

<body>

    <?php
    include('header.php');
    ?>

    <h1>Informe seus dados</h1>

    <form action="#" class="flex-col" onsubmit="return validar()">

        <fieldset>
            <div id="cpf-rg-div">
                <!-- Nome Completo -->
                <label for="nome">
                    Nome:
                    <input type="text" name="nome" id="nome" placeholder="Digite o seu nome">
                </label>

                <!-- RG -->
                <label for="rg">
                    RG:
                    <input type="number" step="any" min="0" name="rg" id="rg" placeholder="Digite o seu RG">
                </label>
                <!-- CPF -->
                <label for="cpf">
                    CPF:
                    <input type="number" step="any" min="0" name="cpf" id="cpf" placeholder="Ex.: 025.743.450-66">
                </label>
            </div>


            <div id="selects">
                <!-- Sexo -->
                <select name="sexo" id="sexo">
                    <option value="">Selecione seu sexo</option>
                    <option value="masc">Masculino</option>
                    <option value="fem">Feminino</option>
                </select>
                <!-- Etnia -->
                <select name="etnia" id="etnia">
                    <option value="">Selecione sua etnia</option>
                    <option value="indigena">Indígena</option>
                    <option value="negro">Negro</option>
                    <option value="branco">Branco</option>
                </select>
                <!-- UF -->
                <select name="" id="">
                    <option value="">Selecione uma UF</option>
                </select>
            </div>

            <div id="tel-email">
                <!-- Telefone -->
                <label for="tel">
                    Telefone:
                    <input type="number" step="any" min="0" name="tel" id="tel" placeholder="EX.: 99431746">
                </label>
                <!-- Email -->
                <label for="email">
                    Email:
                    <input type="email" name="email" id="email" placeholder="EX.: fulano@gmail.com">
                </label>
            </div>
        </fieldset>

        <button type="submit">Enviar</button>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="validarInfos.js"></script>
</body>

</html>