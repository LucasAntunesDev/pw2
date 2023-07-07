<?php

require_once('Bicicleta.php');
require_once('Automovel.php');

class Oficina{
    
    public function manutencao(Veiculo $v){
        if($v instanceof Bicicleta){
            $v->ajustar();
            echo'<br>';
            $v->limpar();
        }
        else if($v instanceof Automovel){
            $v->ajustar();
            echo'<br>';
            $v->limpar();
            echo'<br>';
            $v->trocarOleo();
        }
    }

}