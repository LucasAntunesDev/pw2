<?php

class CalculadoraImpostos
{
    public function calculaIRRF($funcionario)
    {
        return $funcionario->getSalario() * 0.1;
    }
    public function calculaINSS($funcionario)
    {
        return $funcionario->getSalario() * 0.05;
    }
}
