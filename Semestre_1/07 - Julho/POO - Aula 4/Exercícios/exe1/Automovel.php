<?php 

require_once('Veiculo.php');

class Automovel extends Veiculo{

    public function ajustar(){
        echo 'Ajustando automóvel';
    }

    public function limpar(){
        echo 'Limpando automóvel';
    }

    public function trocarOleo(){
        echo 'Trocando óleo do automóvel';
    }
}