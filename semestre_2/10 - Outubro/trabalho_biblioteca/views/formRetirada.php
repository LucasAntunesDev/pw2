<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Nota</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <?php include('views/includes/menu.php'); ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-sky-500 my-4">Formulário de Nota</h1>
        <a href="notas.php" class="text-sky-600 hover:underline">Voltar para a listagem</a>

        <fieldset class="bg-sky-50 shadow-md p-10 rounded-md w-[40rem]">
            <legend class="text-[#006c4a] font-bold text-center text-xl">Dados da nota</legend>

            <form action="salvarNota.php" method="post" class="flex flex-col j
            ustify-center items-center gap-2">
                <input type="hidden" name="id" value='<?php echo $nota->getId(); ?>'>

                <label for="id_aluno"></label>
                <input type="text" id="id_aluno" name="id_aluno" value='<?php echo $nota->getIdAluno(); ?>' 
                placeholder="Id do Aluno" class="border-[1px] border-slate-600 rounded-md 
                px-1 py-3 placeholder:pl-2 focus:outline-[#006C4A]">

                <label for="id_disciplina"></label>
                <input type="text" id="id_disciplina" name="id_disciplina" value='<?php echo $nota->getIdDisciplina(); ?>' 
                placeholder="Id da Disciplina" class="border-[1px] border-slate-600 rounded-md 
                px-1 py-3 placeholder:pl-2 focus:outline-[#006C4A]">

                <label for="nota"></label>
                <input type="text" id="nota" name="nota" value='<?php echo $nota->getNota(); ?>' 
                placeholder="Nota" class="border-[1px] border-slate-600 rounded-md 
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