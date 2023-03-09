<?php
$nome = $_POST["nome"];
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