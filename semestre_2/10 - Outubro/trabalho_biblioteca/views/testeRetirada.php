<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include('views/includes/links_padroes.html');
    ?>
    <title>Formulário de Retiradas</title>
</head>
<body>
    <?php 
        include('views/includes/menu.php');
        date_default_timezone_set('America/Sao_Paulo');
    ?>
    <main id='conteudo_form'>
        <h1>Formulário de Retirada</h1>
        <a href="retiradas.php" id='voltar'>Voltar para Listagem</a>
        <form action="salvarRetirada.php" method="POST">
            <fieldset>
                <legend>Dados do Retirada</legend>
                <input type="hidden" name="id" value='<?php echo $retirada->getId() ?>'>
                    <div id="divisao_forms_retirada">
                        <div>
                            <?php
                                if (!isset($_GET['id'])) {
                                    echo '<select name="alunos_id" id="alunos_id">';
                                    echo "<option value='-1'>Selecionar Aluno</option>";
                                    foreach ($alunos as $aluno) {
                                        echo "<option value = '".$aluno->getId()."'>".$aluno->getNome()."</option>";
                                    }
                                    echo "</select>";
                                }
                                else {
                                    echo "<p>Aluno: ".$retirada->getNomeAluno()."</p>";
                                }
                            ?>
                            </select>
                            <div>
                                <label for="retirada">Data de retirada:</label>
                                <input type="date" name="retirada" id="retirada">
                            </div>
                        </div>
                        <div>
                            <?php
                                    if (!isset($_GET['id'])) {
                                        echo '<select name="livros_id" id="livros_id">';
                                        echo "<option value='-1'>Selecionar Livro</option>";
                                        foreach ($livros as $livro) {
                                            echo "<option value = '".$livro->getId()."'>".$livro->getTitulo()."</option>";
                                        }
                                        echo "</select>";
                                    }
                                    else {
                                        echo "<p>Livro: ".$retirada->getNomeLivro()."</p>";
                                    }
                                ?>
                            </select>
                            <div>
                                <label for="devolucao">Data de devolução:</label>
                                <input type="date" name="devolucao" id="devolucao">
                            </div>
                        </div>
                        <div>
                            <button id='salvar_retiradas_botao' type="submit">Salvar</button>
                        </div>
                    </div>
            </fieldset>
        </form>
    </main>
    <script src="js/retirada.js"></script>
</body>
</html>