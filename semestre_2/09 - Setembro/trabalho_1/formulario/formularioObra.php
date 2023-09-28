<?php
//formulario.php

if (isset($_GET['id'])) {
    #É edição
    require_once('../Database.php');

    $db = new Database();
    $obra = $db->select(
        'SELECT * FROM obras WHERE id = :id',
        [':id' => $_GET['id']]
    );

    $id = $obra[0]['id'];
    $nome = $obra[0]['nome'];
    $sinopse = $obra[0]['sinopse'];
    $tipo = $obra[0]['tipo'];
    // $tipo = $_GET['tipo'];
    $genero = $obra[0]['genero'];
    $assistida = $obra[0]['assistida'];
} else {
    #É inserção
    $id = 0;
    $nome = '';
    $sinopse = '';
    $tipo = '';
    $genero = '';
    $assistida = '';

    $adicao = 1;
}

if(isset($_GET['tipo'])) $tipo = $_GET['tipo'];
if(isset($_GET['assistida'])) $assistida = $_GET['assistida'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de obra</title>
    <script src='https://cdn.tailwindcss.com'></script>
</head>

<body class="bg-slate-900 text-zinc-50">

    <h1 class="text-sky-500 text-6xl text-center mt-2">
        Formulário de obra
        <i class="fa-solid fa-film"></i>
    </h1>
    <a href="../index.php" class="text-center mx-auto text-emerald-600 block">Voltar</a>

    <form action="../salvar/salvar.php" method="post" class="flex flex-col justify-center items-center gap-2">

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Nome" value="<?php echo $nome; ?>" class=" rounded-md 
            border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-gray-400 
            focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6 bg-slate-800
            outline-none text-zinc-300 <?php ?>">

        <label for="sinopse">Sinopse</label>
        <input type="text" name="sinopse" id="sinopse" placeholder="Sinopse" value="<?php echo $sinopse; ?>" class=" rounded-md 
            border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-gray-400 
            focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6 bg-slate-800
            outline-none text-zinc-300 <?php ?>">

        <label for="tipo">Tipo</label>
        <select placeholder="tipo" name="tipo" id="tipo" class="rounded-md 
            border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-gray-400 
            focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6 bg-slate-800
            outline-none text-zinc-300 bg-slate-800">

           <option value="filme" <?php echo $tipo == 'filme' ? 'selected' : ''?>>Filme</option>
           <option value="filme" <?php echo $tipo == 'série' ? 'selected' : ''?>>Série</option>

        </select>

        <label for="genero">Genero</label>
        <input type="text" name="genero" id="genero" placeholder="Gênero" value="<?php echo $genero; ?>" class=" rounded-md 
            border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-gray-400 
            focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6 bg-slate-800
            outline-none text-zinc-300 <?php ?>">

        <div class="flex flex-col justify-center items-center">
            <span class="text-sky-600 text-xl">
                Já assistiu?
            </span>

            <div class="flex flex-row justify-center items-center gap-x-4">
                <label for="1">
                    <input type='radio' name='assistida' value='1' id='1' 
                    <?php echo $assistida == true ? 'checked' : ''?>>
                    Sim
                </label>
                <label for="0">
                    <input type='radio' name='assistida' value='0' id='0' 
                    <?php echo $assistida == true ? '' : 'checked'?>>
                    Não
                </label>
            </div>
        </div>

        <button type="submit" class="bg-emerald-600 rounded-full py-1 
        px-4 hover:bg-emerald-800">Salvar</button>
    </form>

</body>

</html>