<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Livro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
</head>

<body>

    <?php include('views/includes/menu.php'); ?>
    <div class="flex flex-col justify-center items-center gap-1">
        <h1 class="font-bold text-4xl text-[#EF5D58] my-4">
            <i class="fa-solid fa-book"></i>
            Formulário de Livro
        </h1>
        <a href="livros.php" class="text-gray-900 font-bold hover:text-gray-700">Voltar para a listagem</a>

        <fieldset class="border-[1px] border-zinc-300 p-10 rounded-md w-[40rem]">
            <legend class="text-gray-900 font-bold text-center text-xl">Dados do livro</legend>
            <form action="salvarLivro.php" method="post" class="flex flex-col justify-center 
            items-center gap-2">
                <!-- <?php
                        date_default_timezone_set("America/sao_paulo");
                        echo date('d/m/y');
                        ?> -->
                <input type="hidden" name="id" value='<?php echo $livro->getId(); ?>'>

                <label for="titulo" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Titulo</label>
                <input type="text" id="titulo" name="titulo" value='<?php echo $livro->getTitulo(); ?>' class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">

                <label for="titulo" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Autores</label>
                <input type="text" id="autores" name="autores" value='<?php echo $livro->getAutores(); ?>' class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">

                <label for="titulo" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Editora</label>
                <input type="text" id="editora" name="editora" value='<?php echo $livro->getEditora(); ?>' class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">

                <label for="titulo" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Exemplares</label>
                <input type="text" id="qtd_exemplares" name="qtd_exemplares" value='<?php echo $livro->getQuantidadeExemplares(); ?>' class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">


                <label for="titulo" class="block text-sm font-medium leading-6 text-gray-900 mb-2">ISBN</label>
                <input type="text" id="isbn" name="isbn" value='<?php echo $livro->getISBN(); ?>' class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">

                <button type="submit" class="bg-emerald-600 rounded-full py-1 px-24 hover:bg-emerald-800 text-zinc-50 flex items-center mt-4">
                    <span class="material-symbols-outlined">
                        add
                    </span>
                    Salvar
                </button>
            </form>
        </fieldset>

        </form>
    </div>

</body>

</html>