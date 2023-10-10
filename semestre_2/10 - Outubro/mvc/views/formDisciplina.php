<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Disciplina</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <?php include('views/includes/menu.php'); ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-emerald-500 my-4">Formulário de Disciplina</h1>
        <a href="disciplinas.php" class="text-emerald-600 hover:underline">Voltar para a listagem</a>

        <fieldset class="bg-[#EEF6F0] shadow-md p-10 rounded-md w-[40rem]">
            <legend class="text-[#006c4a] font-bold text-center text-xl">Dados da disciplina</legend>

            <form action="salvarDisciplina.php" method="post" class="flex flex-col j
            ustify-center items-center gap-2">
                <input type="hidden" name="id" value='<?php echo $disciplina->getId(); ?>'>

                <label for="nome"></label>
                <input type="text" id="nome" name="nome" value='<?php echo $disciplina->getNome(); ?>' 
                placeholder="Nome da Disciplina" class="border-[1px] border-slate-600 rounded-md 
                px-1 py-3 placeholder:pl-2 focus:outline-[#006C4A]">

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