<head>
    <title>Senha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<?php
$nome = $_POST['nome'];
$senha = $_POST['senha'];

if (!empty($_POST['nome']) && !empty($_POST['senha'])) {
    echo $senha == ucfirst($nome) ? '<h1>Usuário válido<h1/>' : "<h1>Usuário inválido<h1/>";
} else {
    echo "<b>Erro!</b> Você não completou todos os campos";
}
