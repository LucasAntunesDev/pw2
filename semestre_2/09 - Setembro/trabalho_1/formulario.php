<?php
//formulario.php
if (isset($_GET['id'])) {
    #É edição
    require_once('Database.php');

    $db = new Database();
    $obra = $db->select(
        'SELECT * FROM obras 
                        WHERE id = :id',
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
}

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

    <h1 class="text-sky-500 text-6xl text-center mt-2">Formulário de obra</h1>
    <a href="index.php" class="text-center mx-auto text-emerald-600 block">Voltar</a>

    <form action="salvar.php" method="post" class="flex flex-col justify-center items-center gap-2">

        <input type="hidden" name="id" value="<?php echo $id;?>">
        
        <input type="text" name="nome" placeholder="nome" value="<?php echo $nome;?>"
        class="bg-slate-900 border-[2px] border-slate-700 rounded-md
         py-1 text-center placeholder:text-center">

        <input type="text" name="sinopse" placeholder="sinopse" value="<?php echo $sinopse;?>"
        class="bg-slate-900 border-[2px] border-slate-700 rounded-md 
        py-1 text-center placeholder:text-center">
        
        <!-- <select placeholder="tipo" value="<?php //echo $tipo;?>" -->
        <select placeholder="tipo" name="tipo"
        class="bg-slate-900 border-[2px] border-slate-700 rounded-md 
        py-1 text-center placeholder:text-center">
           

            <!-- <option value='filme'>Filme</option>
            <option value='série'>Série</option> -->
            <?php

                if($tipo === 'filme') {
                    echo "<option value='Filme' class='capitalize'>";
                        echo 'Filme';
                   echo "</option>";
                    
                   echo "<option value='Série' class='capitalize'>";
                        echo 'Série';
                   echo "</option>";
                }else{
                    echo "<option value='Série' class='capitalize'>";
                    echo 'Série';
                    echo "</option>";
                    
                    echo "<option value='Filme' class='capitalize'>";
                    echo 'Filme';
                    echo "</option>";

                }

                /*foreach($tipo as $t){
                   echo " <option value='$t' class='capitalize'>
                        $t
                   </option>";
                }*/

            ?>

        </select>
        
        <input type="text" name="genero" placeholder="genero" value="<?php echo $genero;?>"
        class="bg-slate-900 border-[2px] border-slate-700 rounded-md 
        py-1 text-center placeholder:text-center">
        
        <input type="text" name="assistida" placeholder="assistida" value="
        <?php 
            echo $assistida ? 'Sim' : 'Não';
        ?>
        "
        class="bg-slate-900 border-[2px] border-slate-700 rounded-md 
        py-1 text-center placeholder:text-center">
        
        <button type="submit" class="bg-emerald-600 rounded-full py-1 
        px-4 hover:bg-emerald-800">Salvar</button>
    </form>

</body>

</html>