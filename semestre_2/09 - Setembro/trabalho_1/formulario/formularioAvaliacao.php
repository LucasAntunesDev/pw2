<?php
//formulario.php

require_once('../Database.php');

$db = new Database();
if (isset($_GET['id'])) {
    #É edição
    $avaliacao = $db->select(
        'SELECT * FROM avaliacoes WHERE id = :id',
        [':id' => $_GET['id']]
    );

    $id = $avaliacao[0]['id'];
    $obras_id = $avaliacao[0]['obras_id'];
    $nota = $avaliacao[0]['nota'];
    $observacoes = $avaliacao[0]['observacoes'];
    $obras = $db->select('SELECT * FROM obras');
} else {
    #É inserção
    $id = 0;
    $obras_id = '';
    $nota = '';
    $observacoes = '';
    $obras = $db->select('SELECT * FROM obras');

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
    <a href="../index.php" class="text-center mx-auto text-emerald-600 block">Voltar</a>

    <form action="../salvar/salvarAvaliacao.php" method="post" class="flex flex-col justify-center items-center gap-2">

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="obras_id">Nome</label>
        <select name="obras_id"  value="<?php echo $obras_id; ?>" 
        class="rounded-md 
            border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-gray-400 
            focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6 dark:bg-slate-800
            outline-none dark:text-zinc-300">


            <?php foreach($obras as $obra){?>
                <option value="<?php echo $obra['id']; ?>"
                    <?php if ($obras_id === $obra['id']) echo 'selected'?>
                >

                <?php echo $obra['nome'];?>

                </option>
            <?php  }?>
            

        </select>

        <label for="nota">Nota</label>
        <input type="number" name="nota" id="nota" min="0" max="10" 
            class="rounded-md border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-gray-400 
            focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6 dark:bg-slate-800
            outline-none dark:text-zinc-300">

        <label for="observacoes">Observações</label>
        <textarea name="observacoes" id="observacoes" value="<?php echo $observacoes; ?>" cols=" 30" rows="10"
        class="rounded-md 
            border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-gray-400 
            focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6 dark:bg-slate-800
            outline-none dark:text-zinc-300"></textarea>

        <button type="submit" class="bg-emerald-600 rounded-full py-1 
        px-4 hover:bg-emerald-800">Salvar</button>
    </form>

</body>

</html>