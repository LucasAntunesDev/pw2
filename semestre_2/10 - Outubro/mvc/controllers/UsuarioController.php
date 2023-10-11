<?php
//UsuarioController.php

namespace Controller;

use Embed\Http\Redirects;
use Model\UsuarioModel;
use Model\VO\UsuarioVO;


final class UsuarioController extends Controller {
    public function list() {
        $model  = new UsuarioModel();
        $data = $model->selectAll();

        $this->loadView('listaUsuarios', [
            'usuarios' => $data
        ]);
    }

    //monta o formulário
    public function get() {
        //versões maiores que 7.2
        $id = $_GET['id'] ?? null;

        // versões menores que 7.2
        $id = (isset($_GET['id'])) ? $_GET['id'] : null;

        if (empty($id)) {
            $vo = new UsuarioVO();
        } else {
            $model = new UsuarioModel();
            $vo = $model->selectOne(new UsuarioVO($id));
        }

        $this->loadView('formUsuario', ['usuario' => $vo]);
    }

    public function save() {
        $id = $_POST['id'];
        $vo = new UsuarioVO($_POST['id'], $_POST['nome'], $_POST['login'], $_POST['senha']);
        $model = new UsuarioModel();

        $return = empty($id) ? $model->insert($vo) : $model->update($vo);

        $this->redirect('usuarios.php');
    }

    public function remove() {
        if (empty($_GET['id'])) die('Necessário passar o ID');

        $model = new UsuarioModel();

        $return = $model->delete(new UsuarioVO($_GET['id']));

        $this->redirect('usuarios.php');
    }
}
