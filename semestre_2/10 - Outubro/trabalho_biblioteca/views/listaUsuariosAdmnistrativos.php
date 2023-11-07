<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários Admnistrativos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <?php include('views/includes/menu.php') ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-sky-500 py-4">Lista de Usuários Admnistrativos</h1>
        <a href="usuarioAdmnistrativo.php" class="bg-[#006C4A] rounded-full
        p-2 text-zinc-50 shadow-md hover:shadow-[#A9ACA7] px-4 flex 
        items-center gap-x-1 transition duration-300 ease-in-out mb-2">

            <span class="material-symbols-outlined">
                add
            </span>
            Inserir Novo usuario

        </a>

        <table class="border-[1px] border-zinc-300 px-4">
            <thead>
                <tr>
                    <th class="text-xl font-bold border-[1px] border-zinc-300 px-4">ID</th>
                    <th class="text-xl font-bold border-[1px] border-zinc-300 px-4">Nome</th>
                    <th class="text-xl font-bold border-[1px] border-zinc-300 px-4">Login</th>
                    <th class="text-xl font-bold border-[1px] border-zinc-300 px-4">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($usuariosAdmnistrativos as $usuarioAdmnistrativo) {
                    echo '<tr>';
                    echo '<td class="border-[1px] border-zinc-300 px-4">' . $usuarioAdmnistrativo->getId() . '</td>';
                    echo '<td class="border-[1px] border-zinc-300 px-4">' . $usuarioAdmnistrativo->getNome() . '</td>';
                    echo '<td class="border-[1px] border-zinc-300 px-4">' . $usuarioAdmnistrativo->getLogin() . '</td>';
                    echo '<td class="border-[1px]  px-4 flex flex-col">';

                    echo "<a href='aluno.php?id=" . $usuarioAdmnistrativo->getId() . "' class=' bg-emerald-600 rounded-md py-1 px-4 hover:bg-emerald-800
                     text-zinc-50 flex items-center mt-4 gap-x-2 justify-center'>
                        Editar
                        <span class='material-symbols-outlined'>edit</span>
                        </a>";
                    echo "<a href='excluirAluno.php?id=" . $usuarioAdmnistrativo->getId() . "' class=' bg-red-600 rounded-md py-1 px-4 hover:bg-red-800
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