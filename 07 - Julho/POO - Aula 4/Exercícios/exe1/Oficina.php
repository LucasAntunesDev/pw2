<?php

require_once('Bicicleta.php');
require_once('Automovel.php');

class Oficina{
    
    public function manutencao(Veiculo $v){
        if($v instanceof Bicicleta){
            $v->ajustar();
            $v->limpar();
        }
        else if($v instanceof Automovel){
            $v->ajustar();
            $v->limpar();
            $v->trocarOleo();
        }
    }

}