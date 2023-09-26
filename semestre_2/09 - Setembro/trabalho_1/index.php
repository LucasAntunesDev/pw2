<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-slate-900 font-mono text-zinc-50">

    <h1 class="text-5xl text-sky-500 text-center my-2">
        Obras
    </h1>
    <a href="formulario.php" class="text-xl my-2 text-center block hover:underline">Adicionar obra</a>
    <!-- <a href="avaliacoes.php" class="text-xl my-2 text-center block hover:underline">Ver avaliações</a> -->
    <a href="formularioAvaliacao.php" class="text-xl my-2 text-center block hover:underline">Adicionar avaliação</a>

    <table class="mx-auto border-[1px] border-slate-700 my-4">
        <thead>
            <tr class="font-bold border-[1px] border-slate-700 bg-slate-800">
                <th class="border-[1px] border-slate-700 px-2">ID</th>
                <th class="border-[1px] border-slate-700 px-2">Nome</th>
                <th class="border-[1px] border-slate-700 px-2">Sinopse</th>
                <th class="border-[1px] border-slate-700 px-2">Tipo</th>
                <th class="border-[1px] border-slate-700 px-2">Gênero</th>
                <th class="border-[1px] border-slate-700 px-2">Assistida</th>
                <th class="border-[1px] border-slate-700 px-2">Ação</th>
            </tr>

            <?php
            
            require_once('Database.php');

            $db = new Database();
            $obras = $db->select('SELECT * FROM obras');
            $avaliacoes = $db->select('SELECT * FROM avaliacoes');
            
            foreach($obras as $obra){
                echo '<tr class="border-[1px] border-slate-700">';
                    echo '<td class="px-2">' . $obra['id'] . '</td>';
                    echo '<td class="px-2">' . $obra['nome'] . '</td>';
                    echo '<td class="px-2">' . $obra['sinopse'] . '</td>';
                    echo '<td class="px-2">' . $obra['tipo'] . '</td>';
                    echo '<td class="px-2">' . $obra['genero'] . '</td>';
                    echo '<td class="px-2">' . $obra['assistida'] . '</td>';
                    echo '<td class="px-2">';
                        echo '<a href="formulario.php?id='. $obra['id'].'tipo=' . $obra['tipo'].'" 
                        class="text-emerald-600 hover:underline">
                            Editar
                        </a><br>';
                    
                        echo '<a href="excluir.php?id='. $obra['id'].'tipo=' . $obra['tipo'].'"
                        class="text-red-600 hover:underline">
                         Excluir
                        </a>';
                    echo '</td>';
                }
                
                // foreach($avaliacoes as $avaliacao){
                //     echo '<td class="px-2">' . $avaliacao['nota'] . '</td>';
                // }

                echo '</tr>';
            ?>
        </thead>
    </table>

    <table class="mx-auto border-[1px] border-slate-700 my-4">
        <thead>
            <tr class="font-bold border-[1px] border-slate-700 bg-slate-800">
                <th class="border-[1px] border-slate-700 px-2">ID</th>
                <th class="border-[1px] border-slate-700 px-2">Id da Obra</th>
                <th class="border-[1px] border-slate-700 px-2">Nota</th>
                <th class="border-[1px] border-slate-700 px-2">Observações</th>
            </tr>

            <?php
            
            require_once('Database.php');

            $db = new Database();
            // $obras = $db->select('SELECT * FROM obras');
            $avaliacoes = $db->select('SELECT * FROM avaliacoes');

            
            foreach($avaliacoes as $avaliacao){
                    echo '<tr>';
                            echo '<td class="px-2">' . $avaliacao['id'] . '</td>';
                            echo '<td class="px-2">' . $avaliacao['obras_id'] . '</td>';
                            echo '<td class="px-2">' . $avaliacao['nota'] . '</td>';
                            echo '<td class="px-2">' . $avaliacao['observacoes'] . '</td>';
                        echo '</tr>';
                    }

            ?>
        </thead>
    </table>

</body>

</html>