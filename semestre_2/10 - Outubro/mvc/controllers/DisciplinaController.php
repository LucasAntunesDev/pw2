<?php
//DisciplinaController.php

namespace Controller;

use Model\DisciplinaModel;
use Model\VO\DisciplinaVO;


final class DisciplinaController extends Controller {
    public function list() {
        $model  = new DisciplinaModel();
        $data = $model->selectAll();

        $this->loadView('listaDisciplinas', [
            'disciplinas' => $data
        ]);
    }

    //monta o formulário
    public function get() {
        //versões maiores que 7.2
        $id = $_GET['id'] ?? null;

        //versões menores que 7.2
        $id = (isset($_GET['id'])) ? $_GET['id'] : null;

        if (empty($id)) $vo = new DisciplinaVO();
        else {
            $model = new DisciplinaModel();
            $vo = $model->selectOne(new DisciplinaVO($id));
        }

        $this->loadView('fromDisciplina', [
            $disciplina = $vo
        ]);
    }

    public function save() {
    }

    public function remove() {
    }
}
