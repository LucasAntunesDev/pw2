<?php 

require_once('Veiculo.php');

class Bicicleta extends Veiculo{

    public function ajustar(){
        echo 'Ajustando bicicleta';
    }

    public function limpar(){
        echo 'Limpando bicicleta';
    }
}