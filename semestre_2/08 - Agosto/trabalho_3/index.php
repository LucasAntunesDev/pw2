<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
</head>
<body class="font-mono antialiased dark:bg-slate-900 duration-300 ease-in-out">

    <header class="flex justify-end">
        <button id="tema" class="dark:text-zinc-50 pt-4 pr-4 align-self-end transtion duration-300 ease-in-out
        text-zinc-800">
            <span class="material-symbols-outlined" id="icon">
                dark_mode
            </span>
        </button>
    </header>

    <h1 class="text-4xl text-center text-sky-500 my-8 font-bold">
        Repoistório de Links
    </h1>

    <form action="links_gravar.php" method="post" class="flex justify-center items-center gap-x-8 mb-4">

        <div class="flex flex-col justify-center w-min">
            <label for="link" class="text-sky-500 font-bold">Digie o link</label>

            <input type="text" name="link" id="link" placeholder="Digite o link" class="w-[40rem] rounded-md 
            border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-gray-400 
            focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6 dark:bg-slate-800
            outline-none">
        </div>

        <button class="bg-emerald-600 p-2 rounded-full text-zinc-50 hover:bg-emerald-800
        flex items-center">
        <span class="material-symbols-outlined">
                add
            </span>    
        
        Adicionar
        </button>

    </form>

    <h2 class="text-2xl text-center text-sky-500 mb-8 font-bold">Meus links</h2>

    <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 justify-items-center gap-y-8 items-start">
        <?php
        session_start();

        require_once('vendor/autoload.php');
        use Embed\Embed;


        if (!isset($_SESSION['links'])) {
            $_SESSION['links'] = [];
        }

        if (isset($_SESSION['links'])) {

            foreach ($_SESSION['links'] as $link) {
                $info = Embed::create($link);
                echo "
                <div class='max-w-sm rounded-md overflow-hidden shadow-lg h-min max-h-auto dark:bg-slate-800
                hover:cursor-pointer hover:bg-zinc-50 dark:hover:bg-slate-700'>
                
                <img class='w-full' src='$info->image' loading='lazy'>

                <div class='px-6 py-4'>
                    <h2 class='font-bold text-xl mb-2 dark:text-sky-500 dark:hover:text-sky-200
                    hover:text-gray-600 text-zinc-800'>
                        <a href=' $info->url '  target='_blank'>$info->title</a>
                    </h2>

                  <p class='text-gray-700 dark:text-zinc-50 text-base'>
                    $info->description
                  </p>
                </div>
";
                if (isset($info->keyword)) {
                    echo "
                    <div class='px-6 pt-4 pb-2'>
                      <span class='inline-block bg-gray-200 rounded-full px-3 
                      py-1 text-sm font-semibold text-gray-700 mr-2 mb-2'>
                        #$info->keyword
                      </span>
                    </div>";
                }

                echo "<div class='flex flex-row gap-x-4 justify-start pl-8 items-center mb-4'>

                        <button class='bg-emerald-600 p-2 rounded-full 
                        text-zinc-50 hover:bg-emerald-800 w-min'>
                            <a href=' $info->url '  target='_blank'>Acessar</a>
                        </button>

                        <button class='bg-red-600 p-2 rounded-full 
                        text-zinc-50 hover:bg-red-800 w-min'>
                            <a href='apagar_link.php?link=$link'>Excluir</a>
                        </button>

                    </div>

                </div>";
            }

        }

        ?>
    </section>

    <!-- <div style="display: flex; flex-direction:row; justify-content:center; gap:5px;">
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
    </div> -->

    
    <script>
        tailwind.config = {
            darkMode: 'class'
        }


        const tema = document.querySelector('#tema')
        tema.addEventListener('click', () => {
            const html = document.querySelector('html')
            const icon = document.querySelector("#icon")

            if (html.classList.contains('dark')) {
                html.setAttribute('class', '')
                icon.innerHTML = 'dark_mode'
                
            } else {
                html.setAttribute('class', 'dark')
                icon.innerHTML = 'light_mode'
            }
        })
    </script>
</body>

</html>