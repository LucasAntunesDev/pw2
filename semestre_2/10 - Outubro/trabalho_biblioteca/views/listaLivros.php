<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <?php include('views/includes/menu.php') ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-sky-500 py-4">Lista de Livros</h1>
        <a href="livro.php" class="bg-[#006C4A] rounded-full
        p-2 text-zinc-50 shadow-md hover:shadow-[#A9ACA7] px-4 flex 
        items-center gap-x-1 transition duration-300 ease-in-out mb-2">

            <span class="material-symbols-outlined">
                add
            </span>
            Inserir Novo Livro

        </a>

        <table class="border-[1px] border-neutral-900 px-4">
            <thead>
                <tr>
                    <th class="text-xl font-bold border-[1px] border-neutral-900 px-4">ID</th>
                    <th class="text-xl font-bold border-[1px] border-neutral-900 px-4">Título</th>
                    <th class="text-xl font-bold border-[1px] border-neutral-900 px-4">Autores</th>
                    <th class="text-xl font-bold border-[1px] border-neutral-900 px-4">Editora</th>
                    <th class="text-xl font-bold border-[1px] border-neutral-900 px-4">Quantidade de Exemplares</th>
                    <!-- <th class="text-xl font-bold border-[1px] border-neutral-900 px-4">Data de retirada</th>
                    <th class="text-xl font-bold border-[1px] border-neutral-900 px-4">Data de devolução</th> -->
                    <th class="text-xl font-bold border-[1px] border-neutral-900 px-4">ISBN</th>
                    <th class="text-xl font-bold border-[1px] border-neutral-900 px-4">Ações</th>
                </tr>
            </thead>

            <tbody>

                <?php
                foreach ($livros as $livro) {
                    echo '<tr>';
                    echo '<td class="border-[1px] border-neutral-900 px-4">' . $livro->getId() . '</td>';
                    echo '<td class="border-[1px] border-neutral-900 px-4">' . $livro->getTitulo() . '</td>';
                    echo '<td class="border-[1px] border-neutral-900 px-4">' . $livro->getAutores() . '</td>';
                    echo '<td class="border-[1px] border-neutral-900 px-4">' . $livro->getEditora() . '</td>';
                    echo '<td class="border-[1px] border-neutral-900 px-4">' . $livro->getQuantidadeExemplares() . '</td>';
                    // echo '<td class="border-[1px] border-neutral-900 px-4">' . $livro->getDataRetirada() . '</td>';
                    echo '<td class="border-[1px] border-neutral-900 px-4">' . $livro->getISBN() . '</td>';
                    echo '<td class="border-[1px]  px-4 flex flex-col">';

                    echo "<a href='livro.php?id=" . $livro->getId() . "' 
                        class='bg-[#CFE9D9] rounded-full p-2 text-[#30483B] 
                        shadow-md hover:shadow-[#A9ACA7] px-4 flex items-center 
                        gap-x-1 mb-2 transition duration-300 ease-in-out my-2'>

                        <span class='material-symbols-outlined'>edit</span>
                        Editar
                        </a>";
                    echo "<a href='excluirLivro.php?id=" . $livro->getId() . "' 
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