<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Disciplina</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-mono">

    <?php include('views/includes/menu.php'); ?>

    <h1 class="font-bold text-4xl text-sky-500">Formulário de Disciplina</h1>
    <a href="disciplinas.php" class="text-emerald-600 hover:underline">Voltar para a listagem</a>
       <fieldset>
        <legend>Dados da disciplina</legend>

        <form action="disciplinas.php" method="post">
            <input type="hidden" value='<?php echo $disciplina->getId();?>'>
           <label for="nome">
            <input type="text" id="nome" value='<?php echo $disciplina->getNome();?>' placeholder="Nome da Disciplina">
           </label>
        </form>
        <button type="submit">Salvar</button>
       </fieldset>

    </form>

</body>

</html>