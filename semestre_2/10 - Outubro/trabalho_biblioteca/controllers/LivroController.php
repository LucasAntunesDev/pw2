<?php
namespace Controller;

use Embed\Http\Redirects;
use Model\LivroModel;
use Model\VO\LivroVO;


final class LivroController extends Controller {
    public function list() {
        $model  = new LivroModel();
        $data = $model->selectAll();

        $this->loadView('listaLivros', [
            'livros' => $data
        ]);
    }

    public function get() {
        $id = $_GET['id'] ?? null;

        if (empty($id)) {
            $vo = new LivroVO();
        } else {
            $model = new LivroModel();
            $vo = $model->selectOne(new LivroVO($id));
        }

        $this->loadView('formLivro', ['livro' => $vo]);
    }

    public function save() {
        $id = $_POST['id'];
        $vo = new LivroVO(
                            $_POST['id'], $_POST['titulo'], $_POST['autores'], $_POST['editora'], 
                            $_POST['qtd_exmemplares'], $_POST['data_retirada'], $_POST['data_devolucao']
                        );
        $model = new LivroModel();

        $return = empty($id) ? $model->insert($vo) : $model->update($vo);

        $this->redirect('livros.php');
    }

    public function remove() {
        if(empty($_GET['id'])) die('Necessário passar o ID');

        $model = new LivroModel();

        $return = $model->delete(new LivroVO($_GET['id']));

        $this->redirect('livros.php');
    }
}
