<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Alunos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <?php include('views/includes/menu.php'); ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-sky-500 my-4">Formulário de Aluno</h1>
        <a href="alunos.php" class="text-sky-600 hover:underline">Voltar para a listagem</a>

        <fieldset class="bg-sky-50 shadow-md p-10 rounded-md w-[40rem]">
            <legend class="text-[#006c4a] font-bold text-center text-xl">Dados do aluno</legend>

            <form action="salvarAluno.php" method="post" class="flex flex-col j
            ustify-center items-center gap-2">
                <input type="hidden" name="id" value='<?php echo $aluno->getId(); ?>'>

                <label for="nome"></label>
                <input type="text" id="nome" name="nome" value='<?php echo $aluno->getNome(); ?>' placeholder="Nome do aluno" class="border-[1px] border-slate-600 rounded-md 
               px-1 py-3 placeholder:pl-2 focus:outline-[#006C4A]">

                <label for="matricula"></label>
                <input type="number" id="matricula" name="matricula" value='<?php echo $aluno->getMatricula(); ?>' placeholder="Número da matricula" class="border-[1px] border-slate-600 rounded-md 
                px-1 py-3 placeholder:pl-2 focus:outline-[#006C4A]">


                <label for="curso"></label>
                <select placeholder="curso" name="curso" id="curso" value="curso" class="rounded-md 
            border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-gray-400 
            focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6 bg-slate-800
            outline-none text-neutral-900 bg-zinc-50 w-56">

                    <option value="agro" >Agropecuária</option>
                    <option value="adm" >Admnistração</option>
                    <option value="eno" >Enologia</option>
                    <option value="Informática" >Informática</option>
                    <option value="meio" >Meio Ambiente</option>
                    <!-- <option value="filme" <?php echo $curso == 'Agropecuária' ? 'selected' : '' ?>>Agropecuária</option>
                    <option value="filme" <?php echo $curso == 'Admnistração' ? 'selected' : '' ?>>Admnistração</option>
                    <option value="filme" <?php echo $curso == 'Enologia' ? 'selected' : '' ?>>Enologia</option>
                    <option value="filme" <?php echo $curso == 'Informática' ? 'selected' : '' ?>>Informática</option>
                    <option value="filme" <?php echo $curso == 'Meio Ambiente' ? 'selected' : '' ?>>Meio Ambiente</option> -->

                </select>
                <!-- <input type="number" id="curso" name="curso" value='<?php echo $aluno->getCurso(); ?>' 
                placeholder="Curso" class="border-[1px] border-slate-600 rounded-md 
                px-1 py-3 placeholder:pl-2 focus:outline-[#006C4A]"> -->

                <label for="cpf"></label>
                <input type="number" id="cpf" name="cpf" value='<?php echo $aluno->getCPF(); ?>' placeholder="Número do cpf" class="border-[1px] border-slate-600 rounded-md 
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