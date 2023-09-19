<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de carros</title>
    <script src='https://cdn.tailwindcss.com'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-slate-900 text-zinc-50">

    <h1 class="text-sky-500 text-6xl text-center">Listagem de carros</h1>
    <a href="formulario.php" class="text-center mx-auto text-emerald-600">Novo carro</a>

    <table class="mx-auto border-[1px] border-slate-700">
        <tr class="font-bold border-[1px] border-slate-700 bg-slate-800">
            <th class="border-[1px] border-slate-700">ID</th>
            <th class="border-[1px] border-slate-700">Marca</th>
            <th class="border-[1px] border-slate-700">Modelo</th>
            <th class="border-[1px] border-slate-700">Ano</th>
            <th class="border-[1px] border-slate-700">Placa</th>
            <th class="border-[1px] border-slate-700">Chassi</th>
            <th class="border-[1px] border-slate-700">Cor</th>
            <th class="border-[1px] border-slate-700">Ações</th>
        </tr>
        <?php
            
            require_once('Database.php');

            $db = new Database();
            $carros = $db->select('SELECT * FROM carros');
            
            foreach($carros as $carro){
                echo '<tr class="border-[1px] border-slate-700">';
                    echo '<td class="px-2">' . $carro['id'] . '</td>';
                    echo '<td class="px-2">' . $carro['marca'] . '</td>';
                    echo '<td class="px-2">' . $carro['modelo'] . '</td>';
                    echo '<td class="px-2">' . $carro['ano'] . '</td>';
                    echo '<td class="px-2">' . $carro['placa'] . '</td>';
                    echo '<td class="px-2">' . $carro['chassi'] . '</td>';
                    echo '<td class="px-2">' . $carro['cor'] . '</td>';
                    echo '<td class="px-2">';
                        echo '<a href="formulario.php?id='. $carro['id'].'" 
                        class="text-emerald-600 hover:text-emerald-400">
                            Editar
                        </a><br>';

                        echo '<a href="excluir.php?id='. $carro['id'].'"
                        class="text-red-600 hover:text-red-400">
                         Excluir
                        </a>';
                    echo '</td>';
                echo '</tr>';
            }

        ?>
    </table>

</body>

</html>