<?php
namespace Controller;

abstract class Controller{
    public function __construct(){
    #Será feita aqui, posteriormente, a autenticação (autorização)   
    }

    public function redirect($url){
        header("location: $url");
    }

    public function loadView($view, $data = []){
        #Esse método cria automaticamente variáveis baseados nos indexes do array
        extract($data);
        include("views/$view.php");
    }

}