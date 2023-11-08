<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Alunos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
</head>

<body>

    <?php include('views/includes/menu.php'); ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-sky-500 my-4">
            <i class="fa-solid fa-graduation-cap"></i>
            Formulário de Aluno
        </h1>
        <a href="alunos.php" class="text-sky-600 hover:underline">Voltar para a listagem</a>

        <fieldset class="border-[1px] border-zinc-300 p-10 rounded-md w-[40rem]">
            <legend class="text-gray-900 font-bold text-center text-xl">Dados do aluno</legend>

            <form action="salvarAluno.php" method="post" class="flex flex-col justify-center items-center gap-y-1">
                <input type="hidden" name="id" value='<?php echo $aluno->getId(); ?>'>

                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" value='<?php echo $aluno->getNome(); ?>' class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-sky-500 outline-none text-zinc-800">

                <label for="matricula">Matrícula</label>
                <input type="number" id="matricula" name="matricula" value='<?php echo $aluno->getMatricula(); ?>' class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-sky-500 outline-none text-zinc-800">


                <label for="curso">Curso</label>
                <select  name="curso" id="curso" value="curso" class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-sky-500 outline-none text-zinc-800">

                    <option value="Agropecuária" <?php echo $aluno->getCurso() == 'Agropecuária' ? 'selected' : '' ?>>Agropecuária</option>
                    <option value="Admnistração" <?php echo $aluno->getCurso() == 'Admnistração' ? 'selected' : '' ?>>Admnistração</option>
                    <option value="Enologia" <?php echo $aluno->getCurso() == 'Enologia' ? 'selected' : '' ?>>Enologia</option>
                    <option value="Informática" <?php echo $aluno->getCurso() == 'Informática' ? 'selected' : '' ?>>Informática</option>
                    <option value="Meio Ambiente" <?php echo $aluno->getCurso() == 'Meio Ambiente' ? 'selected' : '' ?>>Meio Ambiente</option>

                </select>

                <label for="cpf">CPF</label>
                <input type="number" id="cpf" name="cpf" value='<?php echo $aluno->getCPF(); ?>' class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 
                focus:ring-2 focus:ring-inset focus:ring-sky-500 outline-none text-zinc-800">


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