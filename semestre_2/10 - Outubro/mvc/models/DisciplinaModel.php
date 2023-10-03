<?php
//DisciplinaModel.php

namespace Model;
use Model\VO\DisciplinaVO;
use Util\Database;

final class DisciplinaModel extends Model{
    public function selectAll($vo){
        $db = new Database();
        $data = $db->select('SELECT * FROM disciplinas');

        $array = [];

        foreach($data as $row){
            $vo = new DisciplinaVO($row['id'],$row['nome']);
            array_push($array, $vo = null) ;
        }

        return $array;

    }

    public function selectOne($vo){

    }

    public function insert($vo){

    }

    public function delete($vo){

    }

    public function update($vo){

    }
}