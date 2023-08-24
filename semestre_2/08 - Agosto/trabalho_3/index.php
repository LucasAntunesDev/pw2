<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script>
        //Checa o tema padrão do dispositivo quando a página inicia
        tailwind.config = {
            darkMode: 'class'
        }

        const html = document.querySelector('html')
        const icon = document.querySelector('#icon')
        const dark = window.matchMedia('(prefers-color-scheme: dark)').matches
        
        if (dark) {
            html.setAttribute('class', 'dark')
            icon.innerHTML = 'light_mode'

        } else {
            html.setAttribute('class', '')
            icon.innerHTML = 'dark_mode'
        }
    </script>
</head>

<body class="font-mono antialiased dark:bg-slate-900 duration-300 ease-in-out text-zinc-50 pb-8">

    <header class="flex justify-end">
        <button id="tema" class="dark:text-zinc-50 pt-4 pr-8 align-self-end transtion duration-300 
        ease-in-out text-zinc-800 outline-none">
            <span class="material-symbols-outlined text-4xl dark:hover:text-zinc-50/50 
            hover:hover:text-neutral-900/50" id="icon">
                dark_mode
            </span>
        </button>
    </header>

    <h1 class="text-4xl text-center text-sky-500 mb-8 font-bold">
        Repositório de Links
    </h1>

    <form action="links_gravar.php" method="post" class="flex justify-center items-center gap-x-8 mb-4">

        <input type="text" name="link" id="link" placeholder="Digite o link" class="w-[40rem] rounded-md 
            border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-gray-400 
            focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6 dark:bg-slate-800
            outline-none dark:text-zinc-300">

        <button class="bg-emerald-600 p-2 rounded-full text-zinc-50 hover:bg-emerald-800
        flex items-center dark:hover:bg-emerald-400">
            <span class="material-symbols-outlined">
                add
            </span>
            <span>Adicionar</span>
        </button>

    </form>

    <button id="limparRepositorio" class="bg-red-600 p-2 rounded-full text-zinc-50 hover:bg-red-800
            flex items-center w-64 mb-4 justify-center gap-x-2 dark:hover:bg-red-400 mx-auto">
        <span class="material-symbols-outlined">
            delete
        </span>
        <span>Limpar repositório</span>
    </button>

    <h2 class="text-2xl text-center text-sky-500 mb-8 font-bold">Meus links</h2>

    <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 justify-items-center gap-y-8 
    items-start">
        <?php
        session_start();

        require_once('vendor/autoload.php');

        use Embed\Embed;


        if (!isset($_SESSION['links']) || empty($_SESSION['links'])) {
            $_SESSION['links'] = [];
        }

        if (isset($_SESSION['links'])) {

            foreach ($_SESSION['links'] as $link) {
                $info = Embed::create($link);
                echo "
                <div class='max-w-sm rounded-md overflow-hidden shadow-lg h-min max-h-auto 
                dark:bg-slate-800 hover:cursor-pointer hover:bg-zinc-50 dark:hover:bg-slate-700'>
                
                <img class='w-full' src='$info->image' loading='lazy'>

                <div class='px-6 py-4'>
                    <h2 class='font-bold text-xl mb-2 dark:text-sky-500 dark:hover:text-sky-200
                    hover:text-gray-600 text-zinc-800'>
                        <a href=' $info->url '  target='_blank'>$info->title</a>
                    </h2>

                  <p class='text-gray-700 dark:text-zinc-50 text-base'>
                    $info->description
                  </p>
                </div>";

                echo "<div class='flex flex-row flex-wrap justify-center items-center pb-4'>";
                foreach ($info->tags as $tag) {
                    echo "
                    <div>
                        <span class='inline-block bg-gray-200 hover:bg-gray-300 rounded-full px-3 
                        py-1 text-sm font-semibold text-gray-700 mr-2 mb-2'>
                            #$tag
                        </span>
                    </div>";
                }
                echo "</div>";

                echo "<div class='flex flex-row gap-x-4 justify-start pl-8 items-center mb-4'>

                        <a href=' $info->url '  target='_blank'>
                            <button class='bg-emerald-600 p-2 rounded-full 
                            text-zinc-50 hover:bg-emerald-800 dark:hover:bg-emerald-400 w-min'>
                                Acessar
                            </button>
                        </a>

                        <a href='apagar_link.php?link=$link' onClick='return excluirLink()'>
                            <button class='bg-red-600 p-2 rounded-full 
                            text-zinc-50 hover:bg-red-800 dark:hover:bg-red-400 w-min'>
                                Excluir
                            </button>
                        </a>

                    </div>

                </div>";
            }
        }

        ?>
    </section>

    <script>
       const tema = document.querySelector('#tema')
       
        tema.addEventListener('click', () => {
            const html = document.querySelector('html')
            const icon = document.querySelector("#icon")

            if (html.classList.contains('dark')) {
                html.setAttribute('class', '')
                icon.innerHTML = 'light_mode'

            } else {
                html.setAttribute('class', 'dark')
                icon.innerHTML = 'dark_mode'
            }
        })

        const limparRepositorio = document.querySelector('#limparRepositorio')
        limparRepositorio.addEventListener('click', () =>{
            if(confirm('Você deseja excluir TUDO?!')) location.replace('limpar_sessao.php') 
        })

        const excluirLink = () =>{
            if(confirm('Você realmente deseja excluir o link?')) return
            else return false
        }
    </script>
</body>

</html>