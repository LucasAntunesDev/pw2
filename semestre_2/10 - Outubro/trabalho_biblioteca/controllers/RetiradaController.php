<?php
namespace Controller;

use Embed\Http\Redirects;
use Model\NotaModel;
use Model\VO\NotaVO;


final class RetiradaController extends Controller {
    public function list() {
        $model  = new NotaModel();
        $data = $model->selectAll();

        $this->loadView('listaNotas', [
            'notas' => $data
        ]);
    }
    public function get() {
        //versões maiores que 7.2
        $id = $_GET['id'] ?? null;

        // versões menores que 7.2
        $id = (isset($_GET['id'])) ? $_GET['id'] : null;

        if (empty($id)) {
            $vo = new NotaVO();
        } else {
            $model = new NotaModel();
            $vo = $model->selectOne(new NotaVO($id));
        }

        $this->loadView('formNota', ['nota' => $vo]);
    }

    public function save() {
        $id = $_POST['id'];
        $vo = new NotaVO($_POST['id'], $_POST['id_aluno'], $_POST['id_disciplina'], $_POST['nota']);
        $model = new NotaModel();

        $return = empty($id) ? $model->insert($vo) : $model->update($vo);

        $this->redirect('notas.php');
    }

    public function remove() {
        if (empty($_GET['id'])) die('Necessário passar o ID');

        $model = new NotaModel();

        $return = $model->delete(new NotaVO($_GET['id']));

        $this->redirect('notas.php');
    }
}
