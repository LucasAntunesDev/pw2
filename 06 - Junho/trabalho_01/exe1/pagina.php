<?php
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$login = $_GET['login'];
$senha = $_GET['senha'];

echo "<link rel='stylesheet' href='estilo.css' />";
echo "<ul>
        <li>$nome</li>  
        <li>$senha</li>  
        <li>$login</li>  
        <li>$senha</li>  
      </ul>
";

echo "<div>
  <a href='index.html'>Voltar</a>
</div";
