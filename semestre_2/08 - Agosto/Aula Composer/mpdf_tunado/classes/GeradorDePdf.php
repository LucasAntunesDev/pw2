<?php
//GeradorDePdf.php
namespace App;

class GeradorDePdf {

    private $gerador;

    public function __construct() {
        $this->gerador = new \Mpdf\Mpdf();
    }

    public function adiocionarConteudo($conteudo){
        $this->gerador->WriteHTML($conteudo);
    }

    public function gerar(){
        $this->gerador->Output();
    }

}
