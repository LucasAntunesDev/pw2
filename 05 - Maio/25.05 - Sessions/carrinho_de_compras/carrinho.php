<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-slate-950 text-white">
<div class="flex flex-col justify-center items-center gap-4">
        <h1 class="text-6xl text-sky-500">
            Meu carrinho
            <i class="fa-solid fa-cart-shopping"></i>
        </h1>

        <a href="index.php"
        class="text-green-500 text-4xl">
        Ver produtos da loja
        <i class="fa-solid fa-store"></i>
    </a>

        <ul>
            <?php 
                session_start();

                if(isset($_SESSION['carrinho'])){
                    foreach($_SESSION['carrinho'] as $item){
                        echo "<li>$item</li>";
                    }
                }else echo "<li class='text-xl hover:cursor-pointer hover:text-sky-500'>O carrinho está vazio!</li>";
            ?>
        </ul>
</div>


</body>
<script src="https://cdn.tailwindcss.com"></script>
</html>