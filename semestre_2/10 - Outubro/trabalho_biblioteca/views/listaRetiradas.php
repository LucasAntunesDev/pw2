<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retiradas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <?php include('views/includes/menu.php') ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-sky-500 py-4">Lista de Retiradas</h1>
        <a href="retirada.php" class="bg-emerald-600 rounded-full
         text-zinc-50 shadow-md hover:bg-emerald-800 p-2 flex 
        items-center transition duration-300 ease-in-out mb-2"">

            <span class="material-symbols-outlined">
                add
            </span>
            Inserir Nova Retirada

        </a>

        <table class="border-[1px] border-zinc-300 px-4">
            <thead>
                <tr>
                    <th class="text-xl font-bold border-[1px] border-zinc-300 px-4">ID</th>
                    <th class="text-xl font-bold border-[1px] border-zinc-300 px-4">ID do Aluno</th>
                    <th class="text-xl font-bold border-[1px] border-zinc-300 px-4">ID da Livro</th>
                    <th class="text-xl font-bold border-[1px] border-zinc-300 px-4">Data de Retirada</th>
                    <th class="text-xl font-bold border-[1px] border-zinc-300 px-4">Data de Devolução</th>
                    <th class="text-xl font-bold border-[1px] border-zinc-300 px-4">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($retiradas as $retirada) {
                    echo '<tr>';
                    echo '<td class="border-[1px] border-zinc-300 px-4">' . $retirada->getId() . '</td>';
                    echo '<td class="border-[1px] border-zinc-300 px-4">' . $retirada->getIdAluno() . '</td>';
                    echo '<td class="border-[1px] border-zinc-300 px-4">' . $retirada->getIdLivro() . '</td>';
                    echo '<td class="border-[1px] border-zinc-300 px-4">' . $retirada->getDataRetirada() . '</td>';
                    echo '<td class="border-[1px] border-zinc-300 px-4">' . $retirada->getDataDevolucao() . '</td>';
                    echo '<td class="border-[1px]  px-4 flex flex-col">';

                    echo "<a href='retirada.php?id=" . $retirada->getId() . "' class=' bg-emerald-600 rounded-md py-1 px-4 hover:bg-emerald-800
                     text-zinc-50 flex items-center mt-4 gap-x-2 justify-center'>
                        Editar
                        <span class='material-symbols-outlined'>edit</span>
                        </a>";
                    echo "<a href='excluirRetirada.php?id=" . $retirada->getId() . "' class=' bg-red-600 rounded-md py-1 px-4 hover:bg-red-800
                    text-zinc-50 flex items-center mt-4 gap-x-2 justify-center mb-4'>
                        Excluir
                        <span class='material-symbols-outlined'>delete</span>
                        </a>";
                    echo '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>