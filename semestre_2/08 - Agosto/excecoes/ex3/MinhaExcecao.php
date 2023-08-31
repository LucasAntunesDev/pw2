<?php
//MinhaExcecao.php

class MinhaExcecao extends Exception {

    public function obterMensagemDeErro() {
        return 'Minha exceção foi lançada: '
            . $this->getMessage();
    }
}
