<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        <p class="text-white text-4xl hover:scale-105 duration-100
        hover:text-red-200">
            <a href="index.php">
                Ver produtos da loja
                <i class="fa-solid fa-store"></i>
            </a>
        </p>
        </div>
    </header>

    <h1 class="text-6xl text-[crimson] my-8 text-center">
        Carrinho
        <i class="fa-solid fa-cart-shopping"></i>
    </h1>

    <ul>
        <?php
        session_start();

        if (isset($_SESSION['carrinho'])) {
            foreach ($_SESSION['carrinho'] as $item) {
                echo "<li class='text-[crimson] font-bold text-center'>$item</li>";
            }
        } else echo "<li class='text-[crimson] font-bold text-center'>O carrinho está vazio!</li>";
        ?>
    </ul>

    <div class="flex flex-row justify-center py-4">
        <button class="bg-[crimson] p-2 rounded-md text-white font-bold
        hover:bg-red-700 transition-color duration-100">
            <a href="limpar.php">Limpar lista</a>
        </button>
    </div>
    </div>


</body>
<script src="https://cdn.tailwindcss.com"></script>

</html>