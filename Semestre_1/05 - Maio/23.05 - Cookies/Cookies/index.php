<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Cookies</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
     integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
     crossorigin="anonymous" 
     referrerpolicy="no-referrer" />
</head>
<body class="<?php
    echo $_COOKIE['tema'] ?? ''; ?>">
    <h1>Escolher tema</h1>
    <a href="light-mode.php">
    <i class="fa-solid fa-sun"></i>
        Light Mode
    </a>

    <a href="dark-mode.php">
    <i class="fa-solid fa-moon"></i>
        Dark Mode
    </a>
</body>
</html>