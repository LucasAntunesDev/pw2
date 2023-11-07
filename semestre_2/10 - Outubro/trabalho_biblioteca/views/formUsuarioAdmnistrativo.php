<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Usuário</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <?php include('views/includes/menu.php'); ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-sky-500 my-4">Formulário de Usuário</h1>
        <a href="usuariosAdmnistrativos.php" class="text-sky-600 hover:underline">Voltar para a listagem</a>

        <fieldset class="bg-sky-50 shadow-md p-10 rounded-md w-[40rem]">
            <legend class="text-[#006c4a] font-bold text-center text-xl">Dados do usuário</legend>

            <form action="salvarUsuarioAdmnistrativo.php" method="post" class="flex flex-col j
            ustify-center items-center gap-2">
                <input type="hidden" name="id" value='<?php echo $usuario->getId(); ?>'>

                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" value='<?php echo $usuario->getNome(); ?>' 
                placeholder="Nome do Usuário" class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-zinc-500
                focus:ring-2 focus:ring-inset focus:ring-sky-500 outline-none text-zinc-800">

                <label for="login">Login</label>
                <input type="text" id="login" name="login" value='<?php echo $usuario->getLogin(); ?>' 
                placeholder="Login" class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-zinc-500
                focus:ring-2 focus:ring-inset focus:ring-sky-500 outline-none text-zinc-800">

                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" value=""
                placeholder="Senha" class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-zinc-500
                focus:ring-2 focus:ring-inset focus:ring-sky-500 outline-none text-zinc-800">

                <button type="submit" class="bg-[#006C4A] rounded-full
                p-2 text-zinc-50 shadow-md hover:shadow-[#A9ACA7] px-4 flex 
                items-center gap-x-1 transition duration-300 ease-in-out mt-2">
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