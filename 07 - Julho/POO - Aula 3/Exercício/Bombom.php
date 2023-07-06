<?php

require_once('Guloseima.php');

class Bombom extends Guloseima{
    protected $recheio;

    public function __construct($sabor, $recheio)
    {
        parent::__construct($sabor);

        $this->recheio = $recheio;
    }

    public function getRecheio(){
        return $this->recheio;
    }

    public function setRecheio($recheio){
        $this->recheio = $recheio;
    }
}