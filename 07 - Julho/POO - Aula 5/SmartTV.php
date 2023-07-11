<?php

include_once('TV.php');
include_once('SistemaOperacional.php');

final class SmartTV extends TV{
    private $sistemaOperacional;

    public function __construct($marca, $polegadas, $sistemaOperacional){
        parent::__construct($marca, $polegadas);
        $this->sistemaOperacional= $sistemaOperacional;
    }
}