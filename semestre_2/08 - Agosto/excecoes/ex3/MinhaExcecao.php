<?php
//MinhaExcecao.php

class MinhaExcecao extends Exception {

    public function obterMensagemDeErro() {
        return 'Minha exceção foi lançada: '
            . $this->getMessage();
    }

    public function obterMensagemDeErroDetalhada() {
        return 'Minha exceção foi lançada no arquivo <strong>'
            . $this->getFile()
            . '</strong>, na <strong> linha '
            . $this->getLine()
            . '</strong>. A mensagem foi: <strong>'
            . $this->getMessage()
            . '</strong>';
    }
}
