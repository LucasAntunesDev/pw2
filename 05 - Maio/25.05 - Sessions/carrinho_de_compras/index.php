<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" i
    ntegrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-white dark:bg-neutral-950">
    <header class="flex flex-row items-center justify-start pl-8 border-red-400 border-b-2 
    w-full h-16 bg-[crimson] shadow-lg dark:shadow-red-950 shadow-red-100">

        <div>
        <a href="index.php">
            <img class="h-14 hover:scale-105 duration-100 pr-10"
            src="https://upload.wikimedia.org/wikipedia/commons/f/f1/Escudo_do_Sport_Club_Internacional.svg" 
            alt="Logo do Internacional">
        </a>
        </div>

        <a href="carrinho.php" class="text-white text-4xl hover:scale-105 duration-100
        hover:text-red-200">
            Ver carrinho
            <i class="fa-solid fa-cart-shopping"></i>
        </a>

    </header>
    
    <h1 class="text-6xl text-[crimson] my-8 text-center">
        Bem-vindos à loja
        <i class="fa-solid fa-store"></i>
    </h1>

    <div class="flex flex-row justify-center items-center gap-4">


        <div class="flex flex-col justify-center items-center bg-[crimson] dark:bg-neutral-800 rounded-md
        p-4 h-72 text-[crimson] font-bold text-white hover:scale-105 hover:cursor-pointer hover:bg-red-700
        dark:hover:bg-neutral-600 duration-100 shadow-md shadow-red-200 hover:shadow-xl dark:shadow-black">
            <img class="h-52 rounded-md" 
            src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/24339c14f74248a7a356afb0017c8c7f_9366/Camisa_1_SC_Internacional_23-24_Vermelho_HT7309_01_laydown.jpg" 
            alt="Camisa Inter Home 2023">

            <p class="text-xl hover:cursor-pointer hover:text-red-200 dark:hover:text-[crimson]">

                Camisa Inter Home 2023

            </p>
            <a href="adicionar.php?id=2" class="text-emerald-500">
                <i class="fa-solid fa-plus hover:text-emerald-200 font-mono font-xl">
                    Adicionar ao carrinho
                </i>
            </a>
        </div>

        <div class="flex flex-col justify-center items-center bg-[crimson] dark:bg-neutral-800 rounded-md
        p-4 h-72 text-[crimson] font-bold text-white hover:scale-105 hover:cursor-pointer hover:bg-red-700
        dark:hover:bg-neutral-600 duration-100 shadow-md shadow-red-200 hover:shadow-xl dark:shadow-black">
            <img class="h-52 rounded-md" 
            src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/1c8f7bd609eb45eb8f56d18578e96fb6_9366/Camisa_2_Internacional_23-24_Branco_HS5334_01_laydown.jpg" 
            alt="Camisa Inter Away 2023">

            <p class="text-xl hover:cursor-pointer hover:text-red-200 dark:hover:text-[crimson]">

                Camisa Inter Away 2023

            </p>
            <a href="adicionar.php?id=3" class="text-emerald-500">
                <i class="fa-solid fa-plus hover:text-emerald-200 font-mono font-xl">
                    Adicionar ao carrinho
                </i>
            </a>
        </div>
        <div class="flex flex-col justify-center items-center bg-[crimson] dark:bg-neutral-800 rounded-md
        p-4 h-72 text-[crimson] font-bold text-white hover:scale-105 hover:cursor-pointer hover:bg-red-700
        dark:hover:bg-neutral-600 duration-100 shadow-md shadow-red-200 hover:shadow-xl dark:shadow-black">
            <img class="h-52 rounded-md" 
            src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/868f091a7d61417fbfaeaeec002a5345_9366/Camisa_3_Internacional_22-23_Preto_HD3805_01_laydown.jpg" 
            alt="Camisa Inter Third 2022">

            <p class="text-xl hover:cursor-pointer hover:text-red-200 dark:hover:text-[crimson]">

                Camisa Inter Third 2022

            </p>
            <a href="adicionar.php?id=1" class="text-emerald-500">
                <i class="fa-solid fa-plus hover:text-emerald-200 font-mono font-xl">
                    Adicionar ao carrinho
                </i>
            </a>
        
        </div>

</body>
<script src="https://cdn.tailwindcss.com"></script>

</html>