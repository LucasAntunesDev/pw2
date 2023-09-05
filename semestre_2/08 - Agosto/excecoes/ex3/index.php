<?php
//index.php

require_once('MinhaExcecao.php');

try {
    // throw new Exception('Lançando minha exceção');
    throw new MinhaExcecao('Mensagem da exceção');
} /*catch (MinhaExcecao $e) {
    echo $e->obterMensagemDeErroDetalhada();
}*/catch (Exception $e){
    echo 'Exceção genérica: ' . $e->getMessage();
}
