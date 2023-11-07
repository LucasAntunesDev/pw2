<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <?php include_once('includes/menu.php'); ?>

    <div class="flex flex-col justify-center items-center gap-2 h-auto">

        <h1 class="font-bold text-4xl text-sky-500 my-4">
            <i class="fa-solid fa-book-open"></i>
            Login
        </h1>

        <form action="fazerLogin.php" method="POST" class="flex flex-col justify-center items-center gap-2">

            <fieldset class="px-10 w-[40rem] flex flex-col justify-center items-center gap-y-8">
                <!-- <fieldset class="bg-sky-50 shadow-md p-10 rounded-md w-[40rem] flex flex-col justify-center items-center"> -->

                <div>
                    <label for="login" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Login</label>
                    <input type="text" name="login" id="login" placeholder="Login" class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-zinc-500
                focus:ring-2 focus:ring-inset focus:ring-sky-500 outline-none text-zinc-800">
                </div>



                <div>
                    <label for="senha" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Senha" class="rounded-md 
                border-0 py-1.5 px-7 text-gray-900 ring-1 ring-inset ring-gray-500 placeholder:text-zinc-500 
                focus:ring-2 focus:ring-inset focus:ring-sky-500 outline-none text-zinc-800">
                </div>
                <button type="submit" class="bg-emerald-600 rounded-full py-1 px-24 hover:bg-emerald-800 text-zinc-50">
                    Entrar
                </button>
            </fieldset>

        </form>

    </div>

</body>

</html>
