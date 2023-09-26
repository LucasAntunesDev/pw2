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
</head>

<body class="bg-slate-900 text-zinc-50">

    <h1 class="text-sky-500 text-6xl text-center mt-2">Avaliar obra</h1>
    <a href="index.php" class="text-center mx-auto text-emerald-600 block">Voltar</a>

    <form action="salvarAvaliacao.php" method="post" class="flex flex-col justify-center items-center gap-2">

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <input type="text" name="obras_id" placeholder="Id da Obra" value="<?php echo $obras_id; ?>" class="bg-slate-900 border-[2px] border-slate-700 rounded-md
         py-1 text-center placeholder:text-center <?php ?>">

        <!-- <input type="text" name="nota" placeholder="nota" value="<?php echo $nota; ?>"
        class="bg-slate-900 border-[2px] border-slate-700 rounded-md 
        py-1 text-center placeholder:text-center"> -->
        <div class="flex flex-row justify-center items-center gap-2">
            <label for="1">
                <input type='radio' name='nota' value='1'>
                1
            </label>
            <label for="2">
                <input type='radio' name='nota' value='2'>
                2
            </label>
            <label for="3">
                <input type='radio' name='nota' value='3'>
                3
            </label>
            <label for="4">
                <input type='radio' name='nota' value='4'>
                4
            </label>
            <label for="5">
                <input type='radio' name='nota' value='5'>
                5
            </label>
        </div>

        <!-- <input type="text" name="observacoes" placeholder="observacoes" value="<?php echo $observacoes; ?>"
        class="bg-slate-900 border-[2px] border-slate-700 rounded-md 
        py-1 text-center placeholder:text-center"> -->
        <textarea name="observacoes" value="<?php echo $observacoes; ?>" cols=" 30" rows="10"></textarea>

        <button type="submit" class="bg-emerald-600 rounded-full py-1 
        px-4 hover:bg-emerald-800">Salvar</button>
    </form>

</body>

</html>