<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Retirada</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
</head>

<body>

    <?php

    use Model\VO\AlunoVO;
    use Model\VO\RetiradaVO;

    include('views/includes/menu.php'); ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-[#EF5D58] my-4">
            <i class="fa-solid fa-list-check"></i>
            Formulário de Retirada
        </h1>
        <a href="retiradas.php" class="text-gray-900 font-bold hover:text-gray-700">Voltar para a listagem</a>

        <fieldset class="border-[1px] border-zinc-300 p-10 rounded-md w-[40rem]">
            <legend class="text-gray-900 font-bold text-center text-xl">Dados da retirada</legend>

            <form action="salvarRetirada.php" method="post" class="flex flex-col justify-center items-center gap-2">
                <input type="hidden" name="id" value='<?php echo $retirada->getId(); ?>'>

                <label for="id_aluno" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Aluno</label>
                <select name="id_aluno" id="id_aluno" value="id_aluno" class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">

                    <?php

                    use Util\Database;

                    $db = new Database();
                    $data_alunos = $db->select('SELECT * FROM alunos');

                    foreach ($data_alunos as $alunos => $aluno) {
                        echo "<option value='$aluno[0]<'>$aluno[1]</option>";
                    }

                    ?>

                </select>

                <label for="data_retirada" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Data de retirada</label>
                <input type="date" id="data_retirada" name="data_retirada" value="<?php echo $retirada->getDataRetirada(); ?>"
                class="rounded-md border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">

               
                <label for="id_livro" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Livro</label>
                <select name="id_livro" id="id_livro" value="id_livro" class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500
                focus:ring-2 focus:ring-inset focus:ring-[#ef5d58] outline-none text-zinc-800">

                    <?php
                    $data_livros = $db->select('SELECT * FROM livros');

                    foreach ($data_livros as $livros => $livro) {
                        echo "<option value='$livro[0]<'>$livro[1]</option>";
                    }
                    ?>

                </select>

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

<script>
    const dataRetirada = document.querySelector('#data_retirada')
    console.log('2022-01-01' < dataRetirada)
    console.log(dataRetirada.value)
    // dataRetirada.addEventListener('change', (dataRetirada)=>{
    //     console.log(dataRetirada.value)
    // })


</script>

<!-- <script src="validarData.js"></script> -->

</html>