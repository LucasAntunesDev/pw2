<?php
//index.php
$pdo = new PDO("mysql:host=localhost;dbname=detran","root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = 'SELECT * FROM CARROS';
$statement = $pdo->prepare($query);
$statement->execute();
$carros = $statement->fetchAll();
// echo '<pre>';
// print_r($carros);
// echo '</pre>';

echo '<table border="1">';
    echo '<tr>
            <th>ID</th>    
            <th>Marca</th>    
            <th>Modelo</th>
            <th>Ano</th>  
            <th>Placa</th> 
            <th>Chassi</th>
            <th>Cor</th>
        </tr>';

    foreach($carros as $carro){
        echo '<tr>';
            echo "<td>" . $carro['id']. "</td>";
            echo "<td>" . $carro['marca']. "</td>";
            echo "<td>" . $carro['modelo']. "</td>";
            echo "<td>" . $carro['ano']. "</td>";
            echo "<td>" . $carro['placa']. "</td>";
            echo "<td>" . $carro['chassi']. "</td>";
            echo "<td>" . $carro['cor']. "</td>";
        echo '</tr>';
    }

echo '</table>';