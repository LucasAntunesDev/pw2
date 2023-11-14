<?php
namespace Controller;

use Aluno;
use Model\AlunoModel;
use Model\VO\AlunoVO;


final class AlunoController extends Controller
{
    public function list()
    {
        $model = new AlunoModel();
        $data = $model->selectAll();

        $this->loadView('listaAlunos', [
            'alunos' => $data
        ]);
    }

    //monta o formulário
    public function get()
    {
        $id = $_GET['id'] ?? null;
        $id = (isset($_GET['id'])) ? $_GET['id'] : null;

        if (empty($id)) {
            $vo = new AlunoVO();
        } else {
            $model = new AlunoModel();
            $vo = $model->selectOne(new AlunoVO($id));
        }

        $this->loadView('formAluno', ['aluno' => $vo]);
    }


    public function save()
    {
        $id = $_POST['id'];
        $vo = new AlunoVO($_POST['id'], $_POST['nome'], $_POST['matricula']);
        
        if (!empty($_FILES['foto'] && !$_FILES['foto']['error'])) {
            $diretorio = 'uploads/';
            $nome_arquivo = uniqid();
            $nome_arquivo .= '.';
            $nome_arquivo .= pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            $nome_completo_arquivo = $diretorio . $nome_arquivo;
            move_uploaded_file($_FILES['foto']['tmp_name'], $nome_completo_arquivo);
            $vo->setURLFoto($nome_arquivo);
        }

        $model = new AlunoModel();

        $return = empty($id) ? $model->insert($vo) : $model->update($vo);

        $this->redirect('alunos.php');
    }

    public function remove()
    {
        if (empty($_GET['id']))
            die('Necessário passar o ID');

        $model = new AlunoModel();

        $return = $model->delete(new AlunoVO($_GET['id']));

        $this->redirect('alunos.php');
    }
}
