<?php
namespace Controller;

use Embed\Http\Redirects;
use Model\UsuarioAdmnistrativoModel;
use Model\VO\UsuarioAdmnistrativoVO;


final class UsuarioAdmnistrativoController extends Controller {
    public function list() {
        $model  = new UsuarioAdmnistrativoModel();
        $data = $model->selectAll();

        $this->loadView('listaUsuarioAdmnistrativos', [
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
            $vo = new UsuarioAdmnistrativoVO();
        } else {
            $model = new UsuarioAdmnistrativoModel();
            $vo = $model->selectOne(new UsuarioAdmnistrativoVO($id));
        }

        $this->loadView('formUsuarioAdmnistrativo', ['usuario' => $vo]);
    }

    public function save() {
        $id = $_POST['id'];
        $vo = new UsuarioAdmnistrativoVO($_POST['id'], $_POST['nome'], $_POST['login'], $_POST['senha']);
        $model = new UsuarioAdmnistrativoModel();

        $return = empty($id) ? $model->insert($vo) : $model->update($vo);

        $this->redirect('usuarios.php');
    }

    public function remove() {
        if (empty($_GET['id'])) die('Necessário passar o ID');

        $model = new UsuarioAdmnistrativoModel();

        $return = $model->delete(new UsuarioAdmnistrativoVO($_GET['id']));

        $this->redirect('usuarios.php');
    }
}
