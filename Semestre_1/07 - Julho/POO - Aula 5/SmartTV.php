<?php 

require_once('TV.php');
require_once('SistemaOperacional.php');

final class SmartTV extends TV {
    private $sistemaOpercaional;

    public function __construct($marca, $polegadas, $sistemaOpercaional){
        parent::__construct($marca, $polegadas);

        $this->sistemaOpercaional = $sistemaOpercaional;
    }

    public function getSistemaOpercaional()
    {
        return $this->sistemaOpercaional;
    }

    public function setSistemaOpercaional($sistemaOpercaional)
    {
        $this->sistemaOpercaional = $sistemaOpercaional;
    }
}