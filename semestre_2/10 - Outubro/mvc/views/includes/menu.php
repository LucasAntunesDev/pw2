<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="flex flex-row justify-between items-center pl-4 shadow-md gap-x-4 
h-16 bg-emerald-600 text-zinc-50 border-b-[3px] border-emerald-400">

    <p>Olá
        <?php
        echo isset($_SESSION['usuario']) ? ', ' . $_SESSION['usuario']->getNome() : '';
        ?>!
    </p>
    <ul class="flex flex-row gap-x-4 pr-10">

        <li class="w-fit flex hover:text-zinc-200 transition duration-300 ease-in-out items-center gap-x-1 font-bold">
            <i class="fa-solid fa-graduation-cap"></i>
            <a href="alunos.php">Alunos</a>
        </li>

        <li class="w-fit flex hover:text-zinc-200 transition duration-300 ease-in-out items-center gap-x-1 font-bold">
            <i class="fa-solid fa-circle-user"></i>
            <a href="usuarios.php">Usuarios</a>
        </li>

        <li class="w-fit flex hover:text-zinc-200 transition duration-300 ease-in-out items-center gap-x-1 font-bold">
            <a href="disciplinas.php">
                <i class="fa-solid fa-book"></i>
                Disciplinas
            </a>
        </li>


        <li class="w-fit flex hover:text-zinc-200 transition duration-300 ease-in-out items-center gap-x-1 font-bold">
            <i class="fa-solid fa-list-check"></i>
            <a href="notas.php">Notas</a>
        </li>

        <li class="w-fit flex hover:text-red-600 transition duration-300 ease-in-out items-center gap-x-1 font-bold">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            <a href="logout.php">Sair</a>
        </li>
    </ul>

</div>