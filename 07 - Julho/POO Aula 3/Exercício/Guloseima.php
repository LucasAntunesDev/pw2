<?php

class Guloseima {
    protected $sabor;

    public function __construct($sabor)
    {
        $this->sabor = $sabor;
    }

    public function getSabor(){
        return $this->sabor;
    }

    public function setSabor($sabor){
        $this->sabor = $sabor;
    }
}