<?php
    if(isset($_GET['id'])) {
        #É edição
        require_once('Database.php');
        
        $db = new Database();
        $carro = $db->select('SELECT * FROM carros 
                            WHERE id = :id', 
                            [':id' => $_GET['id']]
                            );

        $id = $carro[0]['id'];
        $marca = $carro[0]['marca'];
        $modelo = $carro[0]['modelo'];
        $ano = $carro[0]['ano'];
        $placa = $carro[0]['placa'];
        $chassi =$carro[0]['chassi'];
        $cor = $carro[0]['cor'];

    }else{
        #É inserção
        $id = 0;
        $marca = '';
        $modelo = '';
        $ano = '';
        $placa = '';
        $chassi = '';
        $cor = '';
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Carro</title>
    <script src='https://cdn.tailwindcss.com'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-slate-900 text-zinc-50">

    <h1 class="text-sky-500 text-6xl text-center mt-2">Formulário de carro</h1>
    <a href="index.php" class="text-center mx-auto text-emerald-600">Voltar <i class="fa-solid fa-rotate-left "></i></a>

    <form action="salvar.php" method="post" class="flex flex-col justify-center items-center gap-2">

        <input type="hidden" name="id" value="<?php echo $id;?>">
        
        <input type="text" name="marca" placeholder="Marca" value="<?php echo $marca;?>"
        class="bg-slate-900 border-[2px] border-slate-700 rounded-md py-1 placeholder:text-center">

        <input type="text" name="modelo" placeholder="Modelo" value="<?php echo $modelo;?>"
        class="bg-slate-900 border-[2px] border-slate-700 rounded-md py-1 placeholder:text-center">
        
        <input type="number" name="ano" placeholder="Ano" value="<?php echo $ano;?>"
        class="bg-slate-900 border-[2px] border-slate-700 rounded-md py-1 placeholder:text-center">
        
        <input type="text" name="placa" placeholder="Placa" value="<?php echo $placa;?>"
        class="bg-slate-900 border-[2px] border-slate-700 rounded-md py-1 placeholder:text-center">
        
        <input type="text" name="chassi" placeholder="Chassi" value="<?php echo $chassi;?>"
        class="bg-slate-900 border-[2px] border-slate-700 rounded-md py-1 placeholder:text-center">
        
        <input type="text" name="cor" placeholder="Cor" value="<?php echo $cor;?>"
        class="bg-slate-900 border-[2px] border-slate-700 rounded-md py-1 placeholder:text-center">
        
        <button type="submit" class="bg-emerald-600 rounded-full py-1 px-4 hover:bg-emerald-800">Salvar</button>
    </form>

</body>

</html>