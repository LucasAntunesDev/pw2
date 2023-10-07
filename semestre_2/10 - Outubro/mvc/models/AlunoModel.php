<?php
//AlunoModel.php

namespace Model;

use Model\VO\AlunoVO;
use Util\Database;

final class AlunoModel extends Model {
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select('SELECT * FROM alunos');

        $array = [];

        foreach ($data as $row) {
            $vo = new AlunoVO($row['id'], $row['nome'], $row['matricula']);
            array_push($array, $vo);
        }

        return $array;
    }

    //conecta no bd, executa a query e retorna os dados
    public function selectOne($vo = null) {
        $db = new Database();
        $query = 'SELECT * FROM alunos WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if(count($data) === 0) return null;

        return new AlunoVO($data[0]['id'], $data[0]['nome'], $data[0]['matricula']);
    }

    public function insert($vo = null) {
    }

    public function delete($vo = null) {
    }

    public function update($vo = null) {
    }
}
