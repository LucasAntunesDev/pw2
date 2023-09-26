<?php
//formulario.php

if (isset($_GET['id'])) {
    #É edição
    require_once('Database.php');

    $db = new Database();
    $avaliacao = $db->select(
        'SELECT * FROM avaliacoes WHERE id = :id',
        [':id' => $_GET['id']]
    );

    $id = $avaliacao[0]['id'];
    $obras_id = $avaliacao[0]['obras_id'];
    $nota = $avaliacao[0]['nota'];
    $observacoes = $avaliacao[0]['observacoes'];
} else {
    #É inserção
    $id = 0;
    $obras_id = '';
    $nota = '';
    $observacoes = '';

    // $adicao = 1;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliar obra</title>
    <script src='https://cdn.tailwindcss.com'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-slate-900 text-zinc-50">

    <h1 class="text-sky-500 text-6xl text-center mt-2">
        Avaliar obra
        <i class="fa-regular fa-star"></i>
    </h1>
    <a href="index.php" class="text-center mx-auto text-emerald-600 block">Voltar</a>

    <form action="salvarAvaliacao.php" method="post" class="flex flex-col justify-center items-center gap-2">

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <input type="text" name="obras_id" placeholder="Id da Obra" value="<?php echo $obras_id; ?>" 
        class="rounded-md 
            border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-gray-400 
            focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6 dark:bg-slate-800
            outline-none dark:text-zinc-300 <?php ?>">

        <div class="flex flex-row justify-center items-center gap-2">
            <label for="1">
                <input type='radio' name='nota' value='1'>
                <!-- <i class="fa-regular fa-star"></i> -->
                1
            </label>
            <label for="2">
                <input type='radio' name='nota' value='2'>
                <!-- <i class="fa-regular fa-star"></i> -->
                2
            </label>
            <label for="3">
                <input type='radio' name='nota' value='3'>
                <!-- <i class="fa-regular fa-star"></i> -->
                3
            </label>
            <label for="4">
                <input type='radio' name='nota' value='4'>
                <!-- <i class="fa-regular fa-star"></i> -->
                4
            </label>
            <label for="5">
                <input type='radio' name='nota' value='5'>
                <!-- <i class="fa-regular fa-star"></i> -->
                5
            </label>
        </div>

        <textarea name="observacoes" value="<?php echo $observacoes; ?>" cols=" 30" rows="10"
        class="rounded-md 
            border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-gray-400 
            focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6 dark:bg-slate-800
            outline-none dark:text-zinc-300"></textarea>

        <button type="submit" class="bg-emerald-600 rounded-full py-1 
        px-4 hover:bg-emerald-800">Salvar</button>
    </form>

</body>

</html>