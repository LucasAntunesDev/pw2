<div class="flex flex-row items-center pl-4 shadow-md gap-x-4 
h-16 bg-emerald-600 text-zinc-50 border-b-[3px] border-emerald-400">

<p>Olá, <?php 
        echo isset($_SESSION['usuario']) ? $_SESSION['usuario']->getNome() : 'Usuário'; 
?>!</p>
<ul class="flex flex-row gap-x-4">
    <li class="w-min flex hover:underline transition duration-300 ease-in-out">
        <a href="disciplinas.php">Disciplinas</a>
    </li>

    <li class="w-min flex hover:underline transition duration-300 ease-in-out">
        <a href="alunos.php">Alunos</a>
    </li>

    <li class="w-min flex hover:underline transition duration-300 ease-in-out">
        <a href="notas.php">Notas</a>
    </li>

    <li class="w-min flex hover:underline transition duration-300 ease-in-out">
        <a href="usuarios.php">Usuarios</a>
    </li>
    
    <li class="w-min flex hover:underline hover:text-red-600 transition duration-300 ease-in-out">
        <a href="logout.php">Sair</a>
    </li>
</ul>

</div>

