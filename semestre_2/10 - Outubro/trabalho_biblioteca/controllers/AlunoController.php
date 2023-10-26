<?php
namespace Controller;

use Aluno;
use Model\AlunoModel;
use Model\VO\AlunoVO;


final class AlunoController extends Controller {
    public function list() {
        $model  = new AlunoModel();
        $data = $model->selectAll();

        $this->loadView('listaAlunos', [
            'alunos' => $data
        ]);
    }

    public function get() {
        $id = $_GET['id'] ?? null;

        if (empty($id)) {
            $vo = new AlunoVO();
        } else {
            $model = new AlunoModel();
            $vo = $model->selectOne(new AlunoVO($id));
        }

        $this->loadView('formAluno', ['aluno' => $vo]);
    }


    public function save() {
        $id = $_POST['id'];
        $vo = new AlunoVO($_POST['id'], $_POST['nome'], $_POST['curso'], $_POST['matricula'], $_POST['cpf']);
        $model = new AlunoModel();

        $return = empty($id) ? $model->insert($vo) : $model->update($vo);

        $this->redirect('alunos.php');
    }

    public function remove() {
        if (empty($_GET['id'])) die('Necessário passar o ID');

        $model = new AlunoModel();

        $return = $model->delete(new AlunoVO($_GET['id']));

        $this->redirect('alunos.php');
    }
}
