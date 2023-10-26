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

    <div class="flex flex-col justify-center items-center gap-2">

        <h1 class="font-bold text-4xl text-sky-500 my-4">Login</h1>

        <form action="fazerLogin.php" method="POST" class="flex flex-col justify-center items-center gap-2">

            <fieldset class="bg-sky-50 shadow-md p-10 rounded-md w-[40rem] flex flex-col justify-center items-center">

                <input type="text" name="login" id="login" placeholder="Login" class="border-[1px] border-slate-600 rounded-md 
                px-1 py-3 placeholder:pl-2 focus:outline-[#006C4A]">

                <br></br>

                <input type="password" name="senha" id="senha" placeholder="Senha" class="border-[1px] border-slate-600 rounded-md 
                px-1 py-3 placeholder:pl-2 focus:outline-[#006C4A]">

                <button type="submit" class="bg-[#006C4A] rounded-full
                p-2 text-zinc-50 shadow-md hover:shadow-[#A9ACA7] px-4 flex 
                items-center gap-x-1 transition duration-300 ease-in-out mt-2">
                    Entrar
                </button>
            </fieldset>

        </form>

    </div>

</body>

</html>