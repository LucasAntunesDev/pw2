<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplinas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-mono">

    <h1 class="font-bold text-4xl text-sky-500">Lista de Disciplinas</h1>
    <a href="disciplina.php" class="text-emerald-600 hover:underline">Inserir Nova Disciplina</a>

    <table class="border-[1px] border-neutral-900">
        <thead>
            <tr>
                <th class="text-xl font-bold border-[1px] border-neutral-900">ID</th>
                <th class="text-xl font-bold border-[1px] border-neutral-900">Nome</th>
                <th class="text-xl font-bold border-[1px] border-neutral-900">Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($disciplinas as $disciplina) {
                echo '<tr>';
                echo '<td class="border-[1px] border-neutral-900">' . $disciplina->getId() . '</td>';
                echo '<td class="border-[1px] border-neutral-900">' . $disciplina->getNome() . '</td>';
                echo '<td class="border-[1px] border-neutral-900">';
                echo "<a href='disciplina.php?=id" . $disciplina->getId() . "'>Editar</a>";
                echo '<br>';
                echo "<a href='excluirDisciplina.php?id" . $disciplina->getId() . "'>Excluir</a>";
                echo '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>