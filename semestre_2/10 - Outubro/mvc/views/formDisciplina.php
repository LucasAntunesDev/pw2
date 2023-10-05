<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Disciplina</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-mono">

<?php include('views/includes/menu.php')?>

    <h1 class="font-bold text-4xl text-sky-500">Formulário de Disciplina</h1>
    <a href="disciplinas.php" class="text-emerald-600 hover:underline">Voltar para a listagem</a>

    <form action="disciplina.php" method="POST">
        <fieldset>
            <legend>
                Dados da disciplina
            </legend>
            <input type="hidden" name="id" value="<?php echo $diciplina->getId(); ?>">
            <label for="nome">Nome></label>
            <br>
            <input type="text" name="Nome" id="Nome" placeholder="Nome da Disciplina"
                value="<?php echo $disciplina->getNome(); ?>">
            <br>
            <button type="submit">Salvar</button>

        </fieldset>
    </form>

</body>

</html>