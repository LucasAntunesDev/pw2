<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 text-zinc-50">

    <h1 class="text-6xl text-sky-500 text-center my-4">
        Salvar carro
    </h1>

    <form action="salvar.php" class="flex flex-col mx-auto justify-center items-center" method="POST">
        <label for="marca">
            <input type="text" name="marca" placeholder="Marca"
            class="border-[1px] border-slate-500 mx-auto my-2 rounded-md bg-slate-900 p-1 placeholder:text-slate-500">
        </label>

        <label for="modelo">
            <input type="text" name="modelo" placeholder="Modelo"
            class="border-[1px] border-slate-500 mx-auto my-2 rounded-md bg-slate-900 p-1 placeholder:text-slate-500">
        </label>

        <label for="ano">
            <input type="number" name="ano" placeholder="Ano"
            class="border-[1px] border-slate-500 mx-auto my-2 rounded-md bg-slate-900 p-1 placeholder:text-slate-500">
        </label>
        
        <label for="placa">
            <input type="text" name="placa" placeholder="Placa"
            class="border-[1px] border-slate-500 mx-auto my-2 rounded-md bg-slate-900 p-1 placeholder:text-slate-500">
        </label>

        <label for="chassi">
            <input type="text" name="chassi" placeholder="Chassi"
            class="border-[1px] border-slate-500 mx-auto my-2 rounded-md bg-slate-900 p-1 placeholder:text-slate-500">
        </label>

        <label for="cor">
            <input type="text" name="cor" placeholder="Cor"
            class="border-[1px] border-slate-500 mx-auto my-2 rounded-md bg-slate-900 p-1 placeholder:text-slate-500">
        </label>

        <button type="submit" class="bg-emerald-600 rounded-md p-2 text-white my-4
        hover:bg-emerald-800 transition duration-300 ease-in-out">
            Manda bala!
        </button>
    </form>

</body>

</html>