<?php
//DisciplinaModel.php

namespace Model;

use Model\VO\DisciplinaVO;
use Util\Database;

final class DisciplinaModel extends Model {
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select('SELECT * FROM disciplinas');

        $array = [];

        foreach ($data as $row) {
            $vo = new DisciplinaVO($row['id'], $row['nome']);
            array_push($array, $vo);
        }

        return $array;
    }

    //conecta no bd, executa a query e retorna os dados
    public function selectOne($vo = null) {
        $db = new Database();
        $query = 'SELECT * FROM disciplinas WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if(count($data) === 0) return null;

        return new DisciplinaVO($data[0]['id'], $data[0]['nome']);
    }

    public function insert($vo = null) {
    }

    public function delete($vo = null) {
    }

    public function update($vo = null) {
    }
}
