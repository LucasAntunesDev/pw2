<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplinas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php
                foreach($disciplinas as $disciplina){
                    echo '<tr>';
                        echo '<td>' .$disciplina->getId() .'</td>';
                        echo '<td>' .$disciplina->getNome() .'</td>';
                        echo '<td></td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>