<?php

namespace Controller;

use Embed\Http\Redirects;
use Model\RetiradaModel;
use Model\VO\RetiradaVO;


final class RetiradaController extends Controller {
    public function list() {
        $model  = new RetiradaModel();
        $data = $model->selectAll();

        $this->loadView('listaRetiradas', [
            'retiradas' => $data
        ]);
    }
    public function get() {
        //versões maiores que 7.2
        $id = $_GET['id'] ?? null;

        // versões menores que 7.2
        $id = (isset($_GET['id'])) ? $_GET['id'] : null;

        if (empty($id)) {
            $vo = new RetiradaVO();
        } else {
            $model = new RetiradaModel();
            $vo = $model->selectOne(new RetiradaVO($id));
        }

        $this->loadView('formRetirada', ['retirada' => $vo]);
    }

    public function save() {
        $id = $_POST['id'];
        $vo = new RetiradaVO(
            $_POST['id'],
            $_POST['id_aluno'],
            $_POST['id_livro'],
            $_POST['data_retirada']
        );
        $model = new RetiradaModel();

        $return = empty($id) ? $model->insert($vo) : $model->update($vo);

        $this->redirect('retiradas.php');
    }

    public function remove() {
        if (empty($_GET['id'])) die('Necessário passar o ID');

        $model = new RetiradaModel();

        $return = $model->delete(new RetiradaVO($_GET['id']));

        $this->redirect('retiradas.php');
    }
}
