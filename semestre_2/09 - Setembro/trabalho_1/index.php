<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 font-mono text-zinc-50">

    <h1 class="text-5xl text-sky-500 text-center my-2">
        Obras
    </h1>
    <a href="formulario.php" class="text-xl my-2 text-center block hover:underline">Novo carro</a>

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
                echo '</tr>';
            }

            ?>
        
        </thead>
    </table>

</body>

</html>