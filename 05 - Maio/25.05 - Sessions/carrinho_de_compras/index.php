<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-slate-950">
    <div class="flex flex-col justify-center items-center gap-4">
        <h1 class="text-6xl text-sky-500">
            Vem-vindos à loja
            <i class="fa-solid fa-store"></i>
        </h1>

        <a href="carrinho.php" class="text-green-500 text-4xl">
            Ver carrinho
            <i class="fa-solid fa-cart-shopping"></i>
        </a>

        <ul class="gap-6">
            <li class="text-white">
                <p class="text-xl hover:cursor-pointer hover:text-sky-500">Camisa Internacional Home 2023

                    <a href="adicionar.php?id=1" class="text-emerald-500">
                        <i class="fa-solid fa-plus hover:text-emerald-200"></i>
                    </a>
                </p>
            </li>

            <li class="text-white">
                <p class="text-xl hover:cursor-pointer hover:text-sky-500">Camisa Internacional Away 2023

                    <a href="adicionar.php?id=2" class="text-emerald-500">
                        <i class="fa-solid fa-plus hover:text-emerald-200"></i>
                    </a>
                </p>
            </li>

            <li class="text-white">
                <p class="text-xl hover:cursor-pointer hover:text-sky-500">Camisa Internacional Third 2023

                    <a href="adicionar.php?id=3" class="text-emerald-500">
                        <i class="fa-solid fa-plus hover:text-emerald-200"></i>
                    </a>
                </p>
            </li>

        </ul>
    </div>

</body>
<script src="https://cdn.tailwindcss.com"></script>

</html>