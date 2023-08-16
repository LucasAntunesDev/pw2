<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-mono">

    <h1 class="text-4xl text-center">
        Repoistório de Links
    </h1>

    <form action="guardar_links.php" method="get" class="flex justify-center items-center gap-x-8 mt-4">

        <input type="text" name="link" id="link" placeholder="Digite o link" class="border-2 border-zinc-400 rounded-md">

        <button class="bg-emerald-600 p-2 rounded-full text-white hover:bg-emerald-800">
            Adicionar
        </button>
    </form>

    <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 justify-items-center">
        <?php
        require_once('vendor/autoload.php');

        session_start();

        use Embed\Embed;
        // echo $_SESSION['links'];
        $link = $_SESSION['links'];

        $info = Embed::create($link);

        if (isset($_SESSION['links'])) {
            
            foreach($_SESSION['links'] as $teste){
                echo '<div class="flex flex-col w-64 bg-zinc-200 rounded-md py-4 justify-center">';

            echo "<img src='$info->image' class='h-40 rounded-md'>";
            echo '<br>';

            echo '<h2 class="text-xl font-bold">' . $info->title . '</h2>';
            echo $info->description;

            echo '<br>';

            echo $info->keyword;
            echo '<br>';

            echo '<div class="flex flex-row gap-x-4 justify-center items-center">';

            echo '<button class="bg-emerald-600 p-2 rounded-full 
            text-white hover:bg-emerald-800w-min">
            <a href=' . $info->url . ' target="_blank">Acessar</a>
            </button>';

            echo '<button class="bg-red-600 p-2 rounded-full 
            text-white hover:bg-emerald-800w-min">
            <a href="apagar_links.php">Excluir</a>
            </button>';

            echo '<div>';

            echo '</div>';
            }
            // }
        }

        ?>
        <!-- <div>Teste</div>
        <div>Teste</div>
        <div>Teste</div>

        <div>Teste</div>
        <div>Teste</div>
        <div>Teste</div>
           -->
    </section>

</body>

</html>