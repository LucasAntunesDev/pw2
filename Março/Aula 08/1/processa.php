<head>
    <title>Informações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<?php
$nome = ucfirst($_POST["nome"]);
$sexo = "";
$curso = $_POST["curso"];
$segredo = $_POST["segredo"];

if($_POST["sexo"] == "m"){
    $sexo = "Masculino";
}else{
    $sexo = "Feminino";
}

echo "<p>Nome: $nome</p>";
echo "<p>Sexo: $sexo</p>";
echo "<p>Curso: $curso</p>";
echo "<p>Segredo: $segredo</p>";