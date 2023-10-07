<?php
//AlunoController.php

namespace Controller;

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

    //monta o formulário
    public function get() {
        //versões maiores que 7.2
        $id = $_GET['id'] ?? null;

        //versões menores que 7.2
        // $id = (isset($_GET['id'])) ? $_GET['id'] : null;

        if (empty($id)) {
            $vo = new AlunoVO();
        }
        else {
            $model = new AlunoModel();
            $vo = $model->selectOne(new AlunoVO($id));
        }

        $this->loadView('formAluno', ['aluno' => $vo]);
    }

    public function save() {
    }

    public function remove() {
    }
}
