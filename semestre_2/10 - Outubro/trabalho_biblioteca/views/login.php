<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <?php include_once('includes/menu.php'); ?>

    <div class="flex flex-row">
        <div class="flex flex-col justify-center items-center gap-2  w-[50vw]" id="login-div">
            <style>
                #login-div {
                    height: calc(100vh - 64px);
                }
            </style>

            <h1 class="font-bold text-4xl text-[#EF5D58] my-4">
                <i class="fa-solid fa-book-open"></i>
                Login
            </h1>

            <form action="fazerLogin.php" method="POST" class="flex flex-col justify-center 
            items-center gap-2">

                <fieldset class="px-10 w-[40rem] flex flex-col justify-center items-center gap-y-8">

                    <div>
                        <label for="login" class="block text-sm font-medium leading-6 text-gray-900 
                        mb-2">Login</label>
                        <input type="text" name="login" id="login" class="rounded-md border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset 
                        ring-gray-500 focus:ring-2 focus:ring-inset
                        focus:ring-[#EF5D58] outline-none text-zinc-800">
                    </div>

                    <div>
                        <label for="senha" class="block text-sm font-medium leading-6 text-gray-900 
                        mb-2">Senha</label>
                        <input type="password" name="senha" id="senha" " class="rounded-md border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset 
                        ring-gray-500 focus:ring-2 focus:ring-inset
                        focus:ring-[#EF5D58] outline-none text-zinc-800">
                    </div>
                    <button type="submit" class="bg-emerald-600 rounded-md py-1 px-24 
                    hover:bg-emerald-800 text-zinc-50 font-bold">
                        Entrar
                    </button>
                </fieldset>

            </form>

        </div>

        <div class="w-[-webkit-fill-available]
        bg-[url(https://images.unsplash.com/photo-1481627834876-b7833e8f5570?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)]">
        </div>

    </div>

</body>

</html>