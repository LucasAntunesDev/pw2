<head>
    <title>Acertos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<?php
$nome = ucfirst($_POST["nome"]);
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$acertos = $q1 + $q2;

echo "<b>$nome</b>, você acertou <b>$acertos</b> questões";
