<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <?php include('views/includes/menu.php') ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-sky-500 py-4">Lista de Alunos</h1>
        <a href="aluno.php" class="bg-[#006C4A] rounded-full
        p-2 text-zinc-50 shadow-md hover:shadow-[#A9ACA7] px-4 flex 
        items-center gap-x-1 transition duration-300 ease-in-out mb-2">

            <span class="material-symbols-outlined">
                add
            </span>
            Inserir Novo Aluno

        </a>

        <table class="border-[1px] border-neutral-900 px-4">
            <thead>
                <tr>
                    <th class="text-xl font-bold border-[1px] border-neutral-900 px-4">ID</th>
                    <th class="text-xl font-bold border-[1px] border-neutral-900 px-4">Nome</th>
                    <th class="text-xl font-bold border-[1px] border-neutral-900 px-4">Curso</th>
                    <th class="text-xl font-bold border-[1px] border-neutral-900 px-4">Matricula</th>
                    <th class="text-xl font-bold border-[1px] border-neutral-900 px-4">CPF</th>
                    <th class="text-xl font-bold border-[1px] border-neutral-900 px-4">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($alunos as $aluno) {
                    echo '<tr>';
                    echo '<td class="border-[1px] border-neutral-900 px-4">' . $aluno->getId() . '</td>';
                    echo '<td class="border-[1px] border-neutral-900 px-4">' . $aluno->getNome() . '</td>';
                    echo '<td class="border-[1px] border-neutral-900 px-4">' . $aluno->getCurso() . '</td>';
                    echo '<td class="border-[1px] border-neutral-900 px-4">' . $aluno->getMatricula() . '</td>';
                    echo '<td class="border-[1px] border-neutral-900 px-4">' . $aluno->getCPF() . '</td>';
                    echo '<td class="border-[1px]  px-4 flex flex-col">';

                    echo "<a href='aluno.php?id=" . $aluno->getId() . "' 
                        class='bg-[#CFE9D9] rounded-full p-2 text-[#30483B] 
                        shadow-md hover:shadow-[#A9ACA7] px-4 flex items-center 
                        gap-x-1 mb-2 transition duration-300 ease-in-out my-2'>

                        <span class='material-symbols-outlined'>edit</span>
                        Editar
                        </a>";
                    echo "<a href='excluirAluno.php?id=" . $aluno->getId() . "' 
                        class='bg-[#FFDAD6] rounded-full p-2 text-[#410002] 
                        shadow-md hover:shadow-[#A9ACA7] px-4 flex items-center 
                        gap-x-1 mb-2 transition duration-300 ease-in-out mb-2'>

                        <span class='material-symbols-outlined'>delete</span>
                            Excluir
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