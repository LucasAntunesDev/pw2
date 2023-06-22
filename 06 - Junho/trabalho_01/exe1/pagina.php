<?php
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$login = $_GET['login'];
$senha = $_GET['senha'];

echo "<link rel='stylesheet' href='estilo.css' />";
echo "<ul>
        <li>Nome: $nome</li>  
        <li>CPF: $cpf</li>  
        <li>Login: $login</li>  
        <li>Senha: $senha</li>  
      </ul>
";

echo "<div>
  <a href='index.html'>Voltar</a>
</div";
