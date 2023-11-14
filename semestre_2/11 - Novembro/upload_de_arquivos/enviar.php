<?php

// echo '<pre>';
// var_dump($_FILES);
// die;
// echo '</pre>';

if ($_FILES['arquivo']['error'])
    echo 'Ocorreu um erro ao fazer o upload do arquivo';
else {
    $diretorio = 'arquivos/';
    $nome_completo_arquivo = $diretorio . $_FILES['arquivo']['name'];
    $sucesso = move_uploaded_file($_FILES['arquivo']['tmp_name'], $nome_completo_arquivo);

    echo $sucesso ? 'Arquivo salvo com sucesso' : 'Ocorreu um erro ao salvar o arquivo no servidor';
}