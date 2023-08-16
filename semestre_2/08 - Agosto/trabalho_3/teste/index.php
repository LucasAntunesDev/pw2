<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-mono">

    <button id="tema" class="text-red-600">
        Dark
    </button>

    <h1 class="text-4xl text-center">
        Repoistório de Links
    </h1>

    <form action="links_gravar.php" method="post" class="flex justify-center items-center gap-x-8 mt-4">

        <input type="text" name="link" id="link" placeholder="Digite o link" class="border-2 border-zinc-400 rounded-md">

        <button class="bg-emerald-600 p-2 rounded-full text-white hover:bg-emerald-800">
            Adicionar
        </button>
    </form>

    <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 justify-items-center">
        <?php
        //Links.php
        require_once('../vendor/autoload.php');
        session_start(); //Inica sessão



        //Se não houver, crie uma
        if (!isset($_SESSION['links'])) {
            $_SESSION['links'] = [];
        }

        use Embed\Embed;
        //Já existe um lista?
        if (isset($_SESSION['links'])) {
            foreach ($_SESSION['links'] as $link) {
                $info = Embed::create($link);
                echo '<div class="flex flex-col w-64 bg-zinc-200 rounded-md py-4 justify-center gap-y-1">';

                echo "<img src='$info->image' class='h-40 rounded-md'>";
                echo '<br>';

                echo '<h2 class="text-xl font-bold overflow-hidden h-12 text-ellipsis">' 
                . $info->title . '</h2>';
                echo '<span class="overflow-hidden h-12 text-ellipsis">'.$info->description.'</span>';

                echo '<br>';

                echo $info->keywords;
                echo '<br>';

                echo '<div class="flex flex-row gap-x-4 justify-center items-center">';

                echo '<button class="bg-emerald-600 p-2 rounded-full 
            text-white hover:bg-emerald-800w-min">
            <a href=' . $info->url . ' target="_blank">Acessar</a>
            </button>';

                echo '<button class="bg-red-600 p-2 rounded-full 
            text-white hover:bg-emerald-800w-min">
            <a href="apagar_link.php?link='.$link.'">Excluir</a>
            </button>';

                echo '</div>';

                echo '</div>';
            }
            echo '</ol>';
        } else {
            echo '<h2 style="color:crimson;">Sua lista está vazia!</h2>';
        }

        ?>
    </section>

    <div style="display: flex; flex-direction:row; justify-content:center; gap:5px;">
        <p>
            <button>
                <a href="links_esvaziar.php">Esvaziar lista</a>
            </button>
        </p>

        <p>
            <button>
                <a href="apagar_ultimo.php">Apagar o último</a>
            </button>
        </p>

        <p>
            <button>
                <a href="apagar_primeiro.php">Apagar o primeiro</a>
            </button>
        </p>
    </div>

    <!-- <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: center;
            vertical-align: middle;
            text-transform: capitalize;
        }

        body {
            background: #001627;
            color: white;
        }

        h1,
        h3 {
            color: rgb(66, 192, 248);
            font-weight: bolder;
            text-transform: uppercase;
        }

        input {
            border-radius: 10px;
            border: solid 2px white;
            background-color: #001627;
            color: white;
            padding: 5px;
        }

        a {
            color: white;
            font-weight: bolder;
            text-decoration: none;
            /* border: solid 2px white;
            padding: 5px;
            border-radius: 10px; */
        }

        button:hover {
            scale: 1.1;
        }

        button {
            border: solid 2px white;
            padding: 5px;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0);
        }
    </style> -->
</body>

<script>
    tailwind.config = {darkMode: 'class'}
    const tema =document.querySelector('#tema')
    tema.addEventListener('click', () =>{
        const body =document.querySelector('body')
        body.setAttribute('class', 'dark')
    })
</script>

</html>