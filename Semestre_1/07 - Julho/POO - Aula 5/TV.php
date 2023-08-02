<?php

class TV
{
    protected string $marca;
    protected int $polegadas;
    protected bool $ligada;
    protected int $canal;
    protected int $volume;

    public function __construct(string $marca, int $polegadas)
    {
        $this->marca = $marca;
        $this->polegadas = $polegadas;

        $this->ligada = false;
        $this->volume = 10;
        $this->canal = 12;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function getPolegadas()
    {
        return $this->polegadas;
    }

    public function setPolegadas($polegadas)
    {
        $this->polegadas = $polegadas;
    }
    public function isLigada(){
        return $this->ligada;
    }
    public function getCanal()
    {
        return $this->canal;
    }
    public function getVolume()
    {
        return $this->volume;
    }

    public function ligar()
    {
        $this->ligada = true;
    }

    public function desligar()
    {
        $this->ligada = false;
    }

    public function aumentarVolume($volume)
    {
        $this->volume += $volume;
    }
    
    public function diminuirVolume($volume)
    {
        $this->volume -= $volume;
    }
    
    public function trocarCanal($canal)
    {
        $this->canal = $canal;
    }
}
